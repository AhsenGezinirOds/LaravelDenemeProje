@extends('layouts.admin')
 
@section('title', 'Product List')
 

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                <a hreef="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="...">Add Product</a>
        </div>
          
        <div class="card">
          
        
        <div class="card-body">
          <table id="example1" class= "table table-bordered table-striped">
            <thread>
              <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Title(s)</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th style="..." colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($dataList as $rs)
              <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->category_id}}</td>
                <td>{{$rs->title}}</td>
                <td>{{$rs->quantity}}</td>
                <td>{{$rs->price}}</td>
                <td>{{$rs->image}}</td>
                <td>{{$rs->status}}</td>
                <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"><ion-icon name="create-outline"></ion-icon></a></td>
                <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete!Are you sure?')"><ion-icon name="trash-outline"></ion-icon></a></td>
</a></td>
</tr>
@endforeach
</table>
        </div>
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
