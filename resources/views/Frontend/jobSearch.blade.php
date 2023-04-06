@extends('Frontend.layouts.master')
@section('page_title')Search Jobs @endsection
@section('body_content')
<div class="py-5 theme-bg" data-overlay="0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="banner_caption text-center mb-2">
                    <h1 class="ft-bold mb-4">The Most Exciting Jobs</h1>
                </div>
                
                <form class="bg-white rounded p-1">
                    <div class="row no-gutters">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
                                <i class="bnc-ico lni lni-search-alt"></i>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
                                <i class="bnc-ico lni lni-target"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width custom-height-lg bg-dark text-white fs-md" type="button">Find Job</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- ======================= Searchbar Banner ======================== -->


<!-- ======================= Filter Wrap Style 1 ======================== -->
<section class="py-2 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <h6 class="mb-0 ft-medium fs-sm">302 New Jobs Found</h6>
            </div>
            
            <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                    <div class="single_fitres mr-2 br-right">
                        <select class="custom-select simple">
                          <option value="1" selected="">Default Sorting</option>
                          <option value="2">Recent jobs</option>
                          <option value="3">Featured jobs</option>
                          <option value="4">Trending Jobs</option>
                          <option value="5">Premium jobs</option>
                        </select>
                    </div>
                    <div class="single_fitres">
                        <a href="job-search-v1.html" class="simple-button mr-1"><i class="ti-layout-grid2"></i></a>
                        <a href="job-list-v1.html" class="simple-button active theme-cl"><i class="ti-view-list"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ============================= Filter Wrap ============================== -->

<!-- ============================ Main Section Start ================================== -->
<section class="bg-light" style="padding: 50px 0 80px !important;">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="bg-white rounded mb-4">							
                
                    <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                        <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                        <div class="ssh-header">
                            <a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
                            <a href="#search_open" data-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Find New Property -->
                    <div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">
                        
                        <div class="search-inner">
                            
                            <div class="filter-search-box px-4 pt-3 pb-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search by keywords...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location, Zip..">
                                </div>
                            </div>
                            
                            <div class="filter_wraps">
                                
                                 {{-- Job categories Search  --}}
                                 <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                @foreach($hirings->joblocation as $location)
                                                                <input id="e2" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e2" class="radio-custom-label">Full time</label>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Job Locations Search  --}}
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="e2" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e2" class="radio-custom-label">Full time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e3" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e3" class="radio-custom-label">Part Time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e4" class="radio-custom" name="jtype" type="radio" checked="">
                                                                <label for="e4" class="radio-custom-label">Contract Base</label>
                                                            </li>
                                                            <li>
                                                                <input id="e5" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e5" class="radio-custom-label">Internship</label>
                                                            </li>
                                                            <li>
                                                                <input id="e6" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e6" class="radio-custom-label">Regular</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Job Skills Search  --}}
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="e2" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e2" class="radio-custom-label">Full time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e3" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e3" class="radio-custom-label">Part Time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e4" class="radio-custom" name="jtype" type="radio" checked="">
                                                                <label for="e4" class="radio-custom-label">Contract Base</label>
                                                            </li>
                                                            <li>
                                                                <input id="e5" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e5" class="radio-custom-label">Internship</label>
                                                            </li>
                                                            <li>
                                                                <input id="e6" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e6" class="radio-custom-label">Regular</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                {{-- Experience Search --}}
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="e2" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e2" class="radio-custom-label">Full time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e3" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e3" class="radio-custom-label">Part Time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e4" class="radio-custom" name="jtype" type="radio" checked="">
                                                                <label for="e4" class="radio-custom-label">Contract Base</label>
                                                            </li>
                                                            <li>
                                                                <input id="e5" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e5" class="radio-custom-label">Internship</label>
                                                            </li>
                                                            <li>
                                                                <input id="e6" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e6" class="radio-custom-label">Regular</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job types Search -->
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="e2" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e2" class="radio-custom-label">Full time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e3" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e3" class="radio-custom-label">Part Time</label>
                                                            </li>
                                                            <li>
                                                                <input id="e4" class="radio-custom" name="jtype" type="radio" checked="">
                                                                <label for="e4" class="radio-custom-label">Contract Base</label>
                                                            </li>
                                                            <li>
                                                                <input id="e5" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e5" class="radio-custom-label">Internship</label>
                                                            </li>
                                                            <li>
                                                                <input id="e6" class="radio-custom" name="jtype" type="radio">
                                                                <label for="e6" class="radio-custom-label">Regular</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Job Level Search -->
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#jblevel" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Level</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="jblevel" data-parent="#jblevel">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="f1" class="checkbox-custom" name="ADA" type="checkbox" checked="">
                                                                <label for="f1" class="checkbox-custom-label">Team Leader</label>
                                                            </li>
                                                            <li>
                                                                <input id="f2" class="checkbox-custom" name="Parking" type="checkbox">
                                                                <label for="f2" class="checkbox-custom-label">Manager</label>
                                                            </li>
                                                            <li>
                                                                <input id="f3" class="checkbox-custom" name="Coffee" type="checkbox">
                                                                <label for="f3" class="checkbox-custom-label">Junior</label>
                                                            </li>
                                                            <li>
                                                                <input id="f4" class="checkbox-custom" name="Coffee" type="checkbox">
                                                                <label for="f4" class="checkbox-custom-label">Senior</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Expected Salary Search -->
                                <div class="single_search_boxed px-4 pt-0">
                                    <div class="widget-boxed-header">
                                        <h4>
                                            <a href="#salary" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Expected Salary</a>
                                        </h4>
                                        
                                    </div>
                                    <div class="widget-boxed-body collapse" id="salary" data-parent="#salary">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            <li>
                                                                <input id="g1" class="checkbox-custom" name="ADA" type="checkbox" checked="">
                                                                <label for="g1" class="checkbox-custom-label">$120k - $140k PA</label>
                                                            </li>
                                                            <li>
                                                                <input id="g2" class="checkbox-custom" name="Parking" type="checkbox">
                                                                <label for="g2" class="checkbox-custom-label">$140k - $150k PA</label>
                                                            </li>
                                                            <li>
                                                                <input id="g3" class="checkbox-custom" name="Coffee" type="checkbox">
                                                                <label for="g3" class="checkbox-custom-label">$150k - $170k PA</label>
                                                            </li>
                                                            <li>
                                                                <input id="g4" class="checkbox-custom" name="Mother" type="checkbox">
                                                                <label for="g4" class="checkbox-custom-label">$170k - $190k PA</label>
                                                            </li>
                                                            <li>
                                                                <input id="g5" class="checkbox-custom" name="Outdoor" type="checkbox">
                                                                <label for="g5" class="checkbox-custom-label">$200k - $250k PA</label>
                                                            </li>
                                                            <li>
                                                                <input id="g6" class="checkbox-custom" name="Pet" type="checkbox">
                                                                <label for="g6" class="checkbox-custom-label">$250k - $300k PA</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group filter_button pt-2 pb-4 px-4">
                                <button type="submit" class="btn btn-md theme-bg text-light rounded full-width">22 Results Show</button>
                            </div>
                        </div>							
                    </div>
                </div>
                <!-- Sidebar End -->
            
            </div>
            
            <!-- Item Wrap Start -->
            <div class="col-lg-8 col-md-12 col-sm-12">
            
                <!-- row -->
                <div class="row align-items-center">
                
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-purple"><i class="lni lni-briefcase mr-1"></i>Contract</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-danger"><i class="lni lni-briefcase mr-1"></i>Internship</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-purple"><i class="lni lni-briefcase mr-1"></i>Contract</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-danger"><i class="lni lni-briefcase mr-1"></i>Internship</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
                                            <span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- row -->
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">18</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ Main Section End ================================== -->

<!-- ======================= Newsletter Start ============================ -->
<section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0">Subscribr Now</h6>
                    <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <form class="bg-white rounded p-1">
                    <div class="row no-gutters">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
                                <i class="bnc-ico lni lni-envelope"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>
@endsection