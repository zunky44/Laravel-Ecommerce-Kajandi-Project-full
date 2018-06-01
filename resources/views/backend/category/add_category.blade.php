@extends('backend.admin_master')
@section('page_title','Category')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Category Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'save-category','enctype'=>'multipart/form-data']) !!}
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Add Category Title</label>
                        <input type="text" id="company" name="cat_title" placeholder="Enter Category Title" class="form-control">
                        @if ($errors->has('cat_title'))
                            <div class="error">{{ $errors->first('cat_title') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Add Category Name</label>
                        <input type="text" id="company" name="cat_name" placeholder="Enter Category Name" class="form-control">
                        @if ($errors->has('cat_name'))
                            <div class="error">{{ $errors->first('cat_name') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Add Category Image</label>
                        <input type="file" id="company" name="cat_image" class="form-control">
                        @if ($errors->has('cat_image'))
                            <div class="error">{{ $errors->first('cat_image') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>
                 </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection