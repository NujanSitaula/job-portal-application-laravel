@extends('Frontend.layouts.masterDashboard')
@section('page_title')Edit Company Profile @endsection
@section('header_shadow')head-shadow @endsection
@section('body_content')
    @include('Frontend.layouts.employerDashboardNav')
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">My Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>Company Account</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" method="post" action="{{ route('employer.profile.edit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <label class="text-dark ft-medium">Company Logo (500 x 500)</label>
                                    <div class="custom-file avater_uploads">
                                        <input type="file"  class="custom-file-input" id="customFile">
                                        <img class="custom-file-label" style="width: 200px; height: 200px;" src="{{ asset('frontEndAssets/img/shotcoderlogo.jpg') }}" alt="">
{{--                                        <label class="custom-file-label" for="customFile"><i class="fa fa-building"></i></label>--}}
                                    </div>
                                </div>

                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">First Name*</label>
                                                <input type="text" name="firstname" class="form-control rounded @error('firstname') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->firstname }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Last Name*</label>
                                                <input type="text" name="lastname" class="form-control rounded @error('lastname') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->lastname }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Company Name*</label>
                                                <input type="text" name="employer_name" class="form-control rounded @error('employer_name') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->employer_name }}">
                                                @error('employer_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Username*</label>
                                                <input type="text" disabled="disabled" class="form-control rounded @error('username') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->username }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Email*</label>
                                                <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Website</label>
                                                <input type="text" name="website" class="form-control rounded @error('website') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->website }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Phone</label>
                                                <input type="number" name="phone" class="form-control rounded @error('phone') is-invalid @enderror" placeholder="98-xxxxx-x30" value="{{ Auth::guard('employer')->user()->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Primary Location</label>
                                                <select name="address_id" class="custom-select rounded selectpicker @error('address_id') is-invalid @enderror" data-live-search="true">
                                                    <option value="">Select Company Primary Location</option>
                                                    @foreach($employerLocation as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Industry</label>
                                                <select name="industry" class="custom-select rounded @error('industry') is-invalid @enderror" data-live-search="true">
                                                    <option value="">Select Company Industry</option>
                                                    @foreach($industry as $ind)
                                                        <option value="{{ $ind->id }}">{{ $ind->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Company Size</label>
                                                <select name="employer_size" class="custom-select rounded  @error('employer_size') is-invalid @enderror">
                                                    <option value="">Select Company Size</option>
                                                    @foreach($employerSize as $size)
                                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Founded On</label>
                                                <input name="founded" type="text" class="form-control rounded @error('founded') is-invalid @enderror" value="{{ Auth::guard('employer')->user()->founded }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">About Info</label>
                                                <textarea name="about" class="form-control with-light @error('about') is-invalid @enderror">{{ Auth::guard('employer')->user()->about }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-time mr-1 theme-cl fs-sm"></i>Opening Hours</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" method="post" action="{{ route('employer.profile.openinghour.edit') }}">
                                @csrf
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Sunday</label>
                                        <input type="text" name="sunday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_sunday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Monday</label>
                                        <input type="text" name="monday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_monday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Tuesday</label>
                                        <input type="text" name="tuesday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_tuesday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Wednesday</label>
                                        <input type="text" name="wednesday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_wednesday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Thursday</label>
                                        <input type="text" name="thursday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_thursday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Friday</label>
                                        <input type="text" name="friday" class="form-control rounded" placeholder="10 AM - 6 PM" value="{{ Auth::guard('employer')->user()->hours_friday }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Saturday</label>
                                        <input type="text" name="saturday" class="form-control rounded" placeholder="Closed" value="{{ Auth::guard('employer')->user()->hours_saturday }}">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-facebook mr-1 theme-cl fs-sm"></i>Social Accounts</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" method="post" action="{{ route('employer.profile.sociallink.edit') }}">
                                @csrf
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Facebook</label>
                                        <input type="text" name="facebook" class="form-control rounded" placeholder="https://www.facebook.com/" value="{{ Auth::guard('employer')->user()->facebook }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Twitter</label>
                                        <input type="text" name="twitter" class="form-control rounded" placeholder="https://www.twitter.com/" value="{{ Auth::guard('employer')->user()->twitter }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control rounded" placeholder="https://www.linkedin.com/" value="{{ Auth::guard('employer')->user()->linkedin }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Github</label>
                                        <input type="text" name="github" class="form-control rounded" placeholder="https://www.gplus.com/" value="{{ Auth::guard('employer')->user()->github }}">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-lock mr-1 theme-cl fs-sm"></i>Contact Information</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" method="post" action="{{ route('employer.profile.contact.edit') }}">
                                @csrf
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Country</label>
                                        <select name="country" class="custom-select rounded">
                                            <option value="Nepal">Nepal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Province</label>
                                        <select class="form-control select2-show-search rounded" name="state" id="choose1" onchange="populate(this.id, 'choose2')" data-placeholder="Select Province" required>
                                            <option label="Select Province"></option>
                                            <option value="province1">Province No. 1</option>
                                            <option value="province2">Madhesh Province</option>
                                            <option value="province3">Bagmati Province</option>
                                            <option value="province4">Gandaki Province</option>
                                            <option value="province5">Lumbini Province</option>
                                            <option value="province6">Karnali Province</option>
                                            <option value="province7">Sudurpashchim Province</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">City</label>
                                        <select class="form-control select2-show-search rounded" id="choose2" onchange="populateLocal(this.id, 'choose3')" name="city" data-placeholder="Select District" required>
                                            <option label="Select District"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Local Level</label>
                                        <select class="form-control select2-show-search rounded" id="choose3" name="address" data-placeholder="Select Local Level" required>
                                            <option label="Select Local Level"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Zip Code</label>
                                        <input type="number" name="zip" class="form-control rounded" placeholder="Zip Code">
                                    </div>
                                </div>
{{--                                <div class="col-xl-6 col-lg-6 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="text-dark ft-medium">Latitude</label>--}}
{{--                                        <input type="password" class="form-control rounded" placeholder="#10 Marke Juger, SBI Road">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 col-lg-6 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="text-dark ft-medium">Longitude</label>--}}
{{--                                        <input type="password" class="form-control rounded" placeholder="#10 Marke Juger, SBI Road">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <script src="{{ asset('frontEndAssets/js/nepaladdress.js') }}"></script>
@endsection
