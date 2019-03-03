@extends('layouts.master')

@section('title', 'List of Admins')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Review List
            </h1>
          <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Review List</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <!-- /.row -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
    
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      <a href="{{url('add-new-admin')}}" type="button" class="btn btn-default"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>

                    @foreach($users as $user)

                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->education}}</td>
                      <td>{{$user->location}}</td>
                      <td>{{$user->notes}}</td>
                      <td><span class="label label-success">Active</span></td>
                      <td><a href= {{action('CategoryController@editadmin', $user->id)}} class="fa fa-pencil"></a>
                      <a href= {{action('CategoryController@destroyadmin', $user->id)}} class="fa fa-trash-o"></a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection