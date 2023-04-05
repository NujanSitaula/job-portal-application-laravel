@extends('Frontend.layouts.masterDashboard')
@section('page_title')Edit Company Profile @endsection
@section('header_shadow')head-shadow @endsection
@section('body_content')
    @include('Frontend.layouts.employerDashboardNav')
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Post A New Job</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Post Job</a></li>
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
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Post Job</h4>	
                            </div>
                        </div>
                        
                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="row">
                                    
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Title*</label>
                                                <input type="text" class="form-control rounded" placeholder="Title">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Description*</label>
                                                <textarea class="form-control rounded" placeholder="Job Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Requirements*</label>
                                                <div class="dynamic-wrap">
                                                      <div class="entry input-group">
                                                        <input class="form-control mb-2" name="fields[]" type="text" placeholder="Type something" />
                                                        <span class="input-group-btn">
                                                          <button class="btn btn-success btn-add mb-2" style="padding: 15px;" type="button">
                                                                  <span class="lni lni-plus"></span>
                                                          </button>
                                                        </span>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Category*</label>
                                                <select class="form-control rounded">
                                                    <option>Accounting</option>
                                                    <option>Banking</option>
                                                    <option>Software</option>
                                                    <option>Hardware</option>
                                                    <option>Hospital</option>
                                                    <option>Fashion Design</option>
                                                    <option>BPO Services</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Location*</label>
                                                <select class="form-control rounded">
                                                    <option>IT & Software</option>
                                                    <option>Bank Services</option>
                                                    <option>Power Corporation</option>
                                                    <option>Water Supply</option>
                                                    <option>Chemical Plant</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Type*</label>
                                                <select class="form-control rounded">
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                    <option>Internship</option>
                                                    <option>Contract</option>
                                                    <option>Freelancing</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Location*</label>
                                                <select class="form-control rounded">
                                                    <option>Begginer</option>
                                                    <option>Junior</option>
                                                    <option>Manager</option>
                                                    <option>Team leader</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Salary Range*</label>
                                                <select class="form-control rounded">
                                                    <option>Web Designing</option>
                                                    <option>JAVA Advance</option>
                                                    <option>PHP Developer</option>
                                                    <option>IOS Developer</option>
                                                    <option>App Developer</option>
                                                    <option>Fashion Designing</option>
                                                    <option>Bank Services</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Experience*</label>
                                                <select class="form-control rounded">
                                                    <option>Begginer</option>
                                                    <option>0 To 6 Month</option>
                                                    <option>1 Years</option>
                                                    <option>2 Years</option>
                                                    <option>3 Years</option>
                                                    <option>4 Years</option>
                                                    <option>5+ Years</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Qualification*</label>
                                                <select class="form-control rounded">
                                                    <option>Graduation</option>
                                                    <option>Master Degree</option>
                                                    <option>BPharma</option>
                                                    <option>P.H.D.</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Gender*</label>
                                                <select class="form-control rounded">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Application Deadline*</label>
                                                <input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Latitude</label>
                                                <input type="text" class="form-control" placeholder="Liverpool" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Longitude</label>
                                                <input type="text" class="form-control" placeholder="Liverpool" />
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job Status*</label>
                                                <select class="form-control rounded">
                                                    <option>Publish</option>
                                                    <option>Draft</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Publish Job</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
