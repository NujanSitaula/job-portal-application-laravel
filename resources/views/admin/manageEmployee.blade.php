@extends('admin.layouts.master')

@section('page_title', 'Manage Employees')

@section('body_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">All Employees</h4>
                        <p class="card-title-desc">All the categories must have an icon, To add the icon you need to input the class name of the icon for example: <code>lni lni-laptop-phone</code>. To get the list of icons and the class name please visit <a href="https://lineicons.com/icons/" target="_blank">Lineicons</a></code>.
                        </p>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target=".bs-add-category-modal-center"><i class="far fa-plus-square mr-2"></i> Add New Category</button>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Employee Photo</th>
                            <th>Employee Name</th>
                            <th>Employee Email</th>
                            <th>Employee Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($listEmployees as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->photo }}</td>
                            <td>{{ $item->firstname . " " . $item->lastname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.job.category.edit', $item->id) }}" class="btn btn-sm btn-outline-warning mr-2" title="Edit" data-toggle="tooltip"><i class="mdi mdi-circle-edit-outline"></i> Suspend</a>
                                <a href="{{ route('admin.job.category.delete', $item->id) }}" class="btn btn-sm btn-outline-danger" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete-outline"></i> Terminate</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>

<div class="modal fade bs-add-category-modal-center" tabindex="-1" role="dialog" aria-labelledby="addCategoryModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('admin.job.category.create') }}">
                    @csrf
                    <div class="form-group">
                      <label for="text">Category Name</label> 
                      <input id="text" name="name" placeholder="Enter Category Name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="text1">Icon</label> 
                      <input id="text1" name="icon" placeholder="Select Icon" type="text" class="form-control" aria-describedby="text1HelpBlock"> 
                      <span id="text1HelpBlock" class="form-text text-muted">Icon e.g: fas fa-icons</span>
                    </div> 
                    <div class="form-group">
                      <button name="submit" type="submit" class="btn btn-primary form-control">Add Category</button>
                    </div>
                  </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection