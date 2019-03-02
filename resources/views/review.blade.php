@extends('layouts.master')

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
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
    
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      <a href="{{url('product')}}" type="button" class="btn btn-default"><i class="fa fa-plus"></i></a>
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

                    @foreach($reviews as $review)

                    <tr>
                      <td>{{$review->id}}</td>
                      <td>{{$review->name}}</td>
                      <td>{{$review->number}}</td>
                      <td>{{$review->message}}</td>
                      @if($review->is_approved == 1)
                      <td><span class="label label-success">Approved</span></td>
                      @else
                      <td><span class="label label-danger">Unapproved</span></td>
                      @endif
                      <td><a href= {{action('ReviewController@destroy', $review->id)}} class="fa fa-trash-o"></a></td>
                      @if($review->is_approved == 0)
                      <td><a href= {{action('ReviewController@approve', $review->id)}} class="fa fa-check"></a></td>
                      @else
                      @endif
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