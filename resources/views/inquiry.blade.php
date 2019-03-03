@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Category
            </h1>
          <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List Category</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <!-- /.row -->
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
    
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
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
                      <th>Email</th>
                      <th>Message</th>
                      <th>Status</th>
                    </tr>

                    @foreach($inquiries as $inquiry)

                    <tr>
                      <td>{{$inquiry->id}}</td>
                      <td>{{$inquiry->name}}</td>
                      <td>{{$inquiry->mobile}}</td>
                      <td>{{$inquiry->email}}</td>
                      <td>{{$inquiry->message}}</td>
                      <td><span class="label label-success">New</span></td>
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