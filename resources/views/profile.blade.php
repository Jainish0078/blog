@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{Auth::user()->images}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
              <p class="text-muted text-center">{{Auth::user()->email}}</p>
              <p class="text-muted text-center">Aministrator</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About {{Auth::user()->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                {{Auth::user()->education}}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"> {{Auth::user()->location}}</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p> {{Auth::user()->notes}}</p>
            </div>
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
           
            <form enctype="multipart/form-data" method="POST" action="{{route('profile.update',Auth::id())}}" class="form-horizontal">
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
               @method('patch')
                @csrf
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    
                    <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" value="{{Auth::user()->name}}" placeholder="Name">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="education" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <input type="text" name="education" value="{{Auth::user()->education}}" class="form-control" id="inputName" placeholder="education">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="location" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                      <input class="form-control" name="location" value="{{Auth::user()->location}}" id="inputExperience" placeholder="Location"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="notes" class="col-sm-2 control-label">Notes</label>

                    <div class="col-sm-10">
                      <input type="text" name="notes" value="{{Auth::user()->notes}}" class="form-control" id="inputSkills" placeholder="Notes">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                    <input type="file" name="image" value="{{Auth::user()->images}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
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