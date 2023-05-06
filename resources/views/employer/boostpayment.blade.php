@extends('Frontend.layouts.masterDashboard')
@section('page_title')
    #1 Job Portal Company
@endsection
@section('header_shadow')
    head-shadow
@endsection
@section('body_content')
    @include('Frontend.layouts.employerDashboardNav')
    <style>
        .card {
            border: none;
        }
    </style>

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Complete Boosting</h1>
                    {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Jobs</a></li>
                    </ol>
                </nav> --}}
                </div>
            </div>
        </div>
        <div class="dashboard-widg-bar d-block">
            
                <div class="bg-white rounded px-3 py-4 mb-4">
                    <p>You are boosting:</p>
                    <div class="jbd-01 d-flex align-items-center justify-content-between">
                        
                        <div class="jbd-flex d-flex align-items-center justify-content-start">
                            
                            <div class="jbd-01-thumb">
                                <img src="{{ asset('frontEndAssets/img').'/'. $hiring[0]->jobemployers->logo }}" class="img-fluid" width="90" alt="" />
                            </div>
                            <div class="jbd-01-caption pl-3">
                                <div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{ $hiring[0]->title }}</h4></div>
                                <div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i>{{ $hiring[0]->joblocation->name }}</span><span class="medium ft-medium text-warning ml-3">{{ $hiring[0]->jobtype->name }}</span></div>
                                <div class="jbl_info01">
                                    @php
                                    $tags = $hiring[0]->tags;
                                    $tag_array = explode(',', $tags);
                                    @endphp
                                        @foreach($tag_array as $tag)
                                        <span class="px-2 py-1 ft-medium medium rounded text-purple bg-light-purple">{{ $tag }}</span>	
                                        @endforeach										
                                </div>
                            </div>
                        </div>
                        <div class="jbd-01-right text-right hide-1023">
                            <div class="jbl_button"><a href="{{ route('jobs', $hiring[0]->id) }}" class="btn rounded bg-white border fs-sm ft-medium">More Details</a></div>
                        </div>
                    </div>
                </div>
            
            <div class="row">
                
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-gravity-list with-icons">
                        <h4 class="mb-0 ft-medium">Boosting Configuration</h4>

                        <div class="card border-none">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="card-text">Boost Duration:</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" id="boost-days" name="boost-days" class="form-control"
                                            min="1" max="7" value="0">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="card-text">Cost:</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" disabled id="boost-price">
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <p>By proceeding with the purchase of a boosted page, you acknowledge and agree that the amount paid for this service is non-refundable. Boosting a page is a promotional service that aims to increase the visibility and engagement of your content on our platform. However, we do not guarantee specific results or outcomes from the boosted page. By using this service, you agree to release us from any liability for any damages or losses that may result from using our boosted page service. We reserve the right to make changes to our boosted page service, including the pricing and availability, without prior notice. If you do not agree to these terms, please do not purchase the boosted page service.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-gravity-list invoices with-icons">
                        <div class="card border-none">
                            <div class="card-body">
                                <h4 class="mb-0 ft-medium">Payment Method</h4>
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <img src="https://techlekh.com/wp-content/uploads/2017/06/esewa-logo.png"
                                            class="img-fluid" alt="eSewa Logo">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                            <input value="100" name="tAmt" id="boost-price-esewas" type="hidden">
                                            <input value="100" name="amt" id="boost-price-esewa" type="hidden">
                                            <input value="0" name="txAmt" type="hidden">
                                            <input value="0" name="psc" type="hidden">
                                            <input value="0" name="pdc" type="hidden">
                                            <input value="EPAYTEST" name="scd" type="hidden">
                                            <input value="{{ $hiring[0]->id }}-{{ uniqid() }}" name="pid" type="hidden">
                                            <input value="http://localhost/jobscout/public/verify/esewa_payment?q=su" type="hidden" name="su">
                                            <input value="http://localhost/jobscout/public/verify/esewa_payment?q=fu" type="hidden" name="fu">
                                        <button type="submit" class="btn btn-primary btn-block">Pay with eSewa & Complete Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const boostDaysSelect = document.getElementById('boost-days');
const boostPriceInput = document.getElementById('boost-price');
const boostPriceInputEsewa = document.getElementById('boost-price-esewa');
const boostPriceInputEsewas = document.getElementById('boost-price-esewas');

// Add event listener to update price on change of boost days
boostDaysSelect.addEventListener('change', () => {
  const boostDays = boostDaysSelect.value;
  const boostPrice = boostDays * 100;
  boostPriceInput.value = 'Rs. ' + boostPrice;
  boostPriceInputEsewa.value = boostPrice;
    boostPriceInputEsewas.value = boostPrice;
});
const boostDays = boostDaysSelect.value;
  const boostPrice = boostDays * 100;
  boostPriceInput.value = 'Rs. ' + boostPrice;
  boostPriceInputEsewa.value = boostPrice;
    boostPriceInputEsewas.value = boostPrice;
            </script>
    @endsection
