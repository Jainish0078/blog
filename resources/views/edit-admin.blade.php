@extends('layouts.master')

@section('title', 'Edit admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a>Settings</a></li>
            </ul>
            <div class="tab-content">
           <div class="form-horizontal">
           <form method="POST" action="{{route('user-update', $users->id)}}" class="form-horizontal">
            
            @method('patch')
              @csrf
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    
                    <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$users->name}}" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" value="{{$users->email}}" id="inputEmail" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input class="form-control" id="password" type="password" value="{{$users->password}}" name="password" placeholder="Password"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="location" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                      <input type="text" name="location" value="{{$users->location}}" class="form-control" placeholder="Location">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="education" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <input type="text" name="education"  class="form-control" value="{{$users->education}}" placeholder="education">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="notes" class="col-sm-2 control-label">Notes</label>

                    <div class="col-sm-10">
                      <input type="text" name="notes"  class="form-control" value="{{$users->notes}}" placeholder="notes">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                {{ Form::close() }}
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection