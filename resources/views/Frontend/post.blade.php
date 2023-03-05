@extends('Frontend.layouts.master')

@section('page_title'){{ $blogPost->title }} @endsection
@section('body_content')
<section class="page-title gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <div class="breadcrumbs-wrap">
                    <h2 class="mb-0 ft-medium">{{ $blogPost->title }}</h1>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">{{ $blogPost->title }}</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
    <div class="row">
                        
        <!-- Blog Detail -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="article_detail_wrapss single_article_wrap format-standard">
                <div class="article_body_wrap">
                
                    <div class="article_featured_image">
                        <img class="img-fluid" src="{{ asset('frontEndAssets/img/'.$blogPost->image) }}" alt="">
                    </div>
                    
                    <div class="article_top_info">
                        <ul class="article_middle_info">
                            <li><a href="#"><span class="icons"><i class="ti-time"></i></span>{{ $blogPost->created_at->format('d F, Y') }}</a></li>
                            <li><a href="#"><span class="icons"><i class="ti-eye"></i></span>{{ $blogPost->view_count }} Views</a></li>
                        </ul>
                    </div>
                    <h2 class="post-title">{{ $blogPost->title }}</h2>
                        {!! $blogPost->content !!}
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                    
            <!-- Searchbard -->
            <div class="single_widgets widget_search">
                <h4 class="title">Search</h4>
                <form action="#" class="sidebar-search-form">
                    <input type="search" name="search" placeholder="Search..">
                    <button type="submit"><i class="ti-search"></i></button>
                </form>
            </div>

            <!-- Categories -->
            <div class="single_widgets widget_category">
                <h4 class="title">Categories</h4>
                <ul>
                    <li><a href="#">Lifestyle <span>09</span></a></li>
                    <li><a href="#">Travel <span>12</span></a></li>
                    <li><a href="#">Fashion <span>19</span></a>
                    </li><li><a href="#">Branding <span>17</span></a></li>
                    <li><a href="#">Music <span>10</span></a></li>
                </ul>
            </div>
            
            <!-- Trending Posts -->
            <div class="single_widgets widget_thumb_post">
                <h4 class="title">Trending Posts</h4>
                <ul>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Alonso Kelina Falao Asiano Pero</a> 
                            <span class="post-date"><i class="ti-calendar"></i>10 Min ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">It is a long established fact that a reader</a> 
                            <span class="post-date"><i class="ti-calendar"></i>2 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Many desktop publish packages and web</a> 
                            <span class="post-date"><i class="ti-calendar"></i>4 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Various versions have evolved over the years</a> 
                            <span class="post-date"><i class="ti-calendar"></i>7 Hours ago</span>
                        </span>
                    </li>
                    <li>
                        <span class="left">
                            <img src="https://via.placeholder.com/1200x800" alt="" class="">
                        </span>
                        <span class="right">
                            <a class="feed-title" href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a> 
                            <span class="post-date"><i class="ti-calendar"></i>3 Days ago</span>
                        </span>
                    </li>
                </ul>
            </div>
            
            <!-- Tags Cloud -->
            <div class="single_widgets widget_tags">
                <h4 class="title">Tags Cloud</h4>
                <ul>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Music</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
</section>
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