@extends('layouts.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Category
            </h1>
            
            <ol class="breadcrumb">
                <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Category</li>
            </ol>
        
        <section class="content">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                    <form method="POST" action="{{route('add-category')}}">
                        @csrf
                            <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Url">
                            </div>
                        
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
        </section>
  </div>
  <!-- /.content-wrapper -->

@endsection