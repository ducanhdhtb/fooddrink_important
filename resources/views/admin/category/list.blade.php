@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                @foreach($category as $category)
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Are you sure?')" href="admin/category/delete/{{ $category->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/category/edit/{{ $category->id }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection