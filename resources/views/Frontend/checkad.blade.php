@extends('Frontend.layouts.master')
@section('page_title')
    Employer Details
@endsection
@section('body_content')
    <div class="container">
        <div class="row">
            @php
            $index = floor(count($hirings) / 2);
            $mergedData = array_merge($hirings, $boosted);
            shuffle($mergedData);

            @endphp
            @foreach($mergedData as $hiring)
            <div class="col-4">
                <div class="card">
                    <img src="https://example.com/image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">This is a sample card created using Bootstrap.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        
    </div>
    </div>
@endsection
