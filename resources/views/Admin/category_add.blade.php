@extends('layouts.admin')
 
@section('title', 'Add Category')
 

@section('content')
    

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Category</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        
        
              <!-- form start -->
              <form role="form" action="{{route('admin_category_create')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Parent</label>

                    <select class="form-control select2" name="parent_id" style="width: 100%;">
                    <option value="0" selected="selected">Main Category</option>

                    @foreach($datalist as $rs)
                    <option value="{{$rs->parent_id}}">{{$rs->title}}</option>
                    @endforeach
                    </select>
                   
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" >
                  </div>
                  
                  <div class="form-group">
                    <label>Keywords</label>
                    <input type="text" name="keywords" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected">False</option>
                    <option>True</option>
                  </select>
                </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
              </form>
            







        
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection 