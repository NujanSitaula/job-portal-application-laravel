@extends('admin.layouts.master')

@section('page_title', 'Edit Job Category')

@section('body_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Edit Category</h4>
                        <p class="card-title-desc">To edit the icon you need to input the class name of the icon for example: <code>lni lni-laptop-phone</code>. To get the list of icons and the class name please visit <a href="https://lineicons.com/icons/" target="_blank">Lineicons</a>
                        </p>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.job.category') }}" class="btn btn-primary float-right"><i class="far fa-eye mr-2"></i> View All Categories</a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <form action="{{ route('admin.job.category.edit.submit', $jobCategoryID->id) }}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" value="{{ $jobCategoryID->name }}" name="name" type="text" placeholder="Enter Category Name">
                          </div>
                          <div class="form-group">
                            <label>Category Icon Class</label>
                            <input class="form-control" value="{{ $jobCategoryID->icon }}" name="icon" type="text" placeholder="Enter Icon Class">
                          </div>
                          <div class="form-group">
                          <button type="submit" class="btn btn-primary float-right">Save Category</button>
                          </div>
                        </form>
                    </div>
                    <!-- end col -->
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection