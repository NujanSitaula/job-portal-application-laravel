<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\BoostOrder;

use App\Models\Hiring;

class PaymentController extends Controller
{
    public function verifyEsewa(Request $request){

        $str = $request->oid;
        $parts = explode('-', $str);
        $firstPart = $parts[0];
        
        

        if($request->q == 'fu'){
            die('Payment Failed');
        };

        //dd($status);
        $productID = $firstPart;
        $refrenceID = $request->refId;
        $amount = $request->amt;

        //dd($productID, $refrenceID, $amount);
        $expirydate = $request->amt / 100;

        $dateExpired = Carbon::now()->addDays($expirydate);

        $url = "https://uat.esewa.com.np/epay/transrec";
        $data =[
            'amt'=> $amount,
            'rid'=> $refrenceID,
            'pid'=> $request->oid,
            'scd'=> 'EPAYTEST'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        curl_close($curl);

        $decodedEsewa = json_decode($response);
        $xml = simplexml_load_string($response); // assuming $response contains the XML string
        $success = (string) $xml->response_code;
        $responseCode = trim($success);

        // dd($responseCode);

        if($responseCode == 'Success'){
        $transactionData = new BoostOrder();
        $transactionData->employer_id = auth()->id();
        //$dataInRupees = $amount
        $transactionData->package_id = $productID;
        $transactionData->package_price = $amount;
        $transactionData->tnxID = $refrenceID;
        $transactionData->payment_method = 'Esewa Epay';
        $transactionData->isActive = 1;
        $transactionData->date_purchased = Carbon::now();
        $transactionData->date_expired = $dateExpired;
        $transactionData->save();

        $hiring = Hiring::where('id', $productID)->first();

        $hiring->isBoosted = 'yes';
        $hiring->update();

        return redirect()->back()->with('success', 'Payment Successful');
        }


    }
}
