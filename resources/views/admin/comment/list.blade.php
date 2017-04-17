@extends('admin.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Avartar</th>
                                <th>Comment user</th>
                                <th>Content</th>
                                <th>Product was comment</th>
                                <th>Day was commented</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td><img width="60px" height="60px" class="img-circle" src="uploads/avartar/{{$cm->customer->avartar}}" alt=""></td>
                                <td>{{ $cm->customer->name }}</td>
                                <td>{{ $cm->content }}</td>
                                <td>{{ $cm->product->name }}</td>
                                <td>{{ $cm->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return(confirm('Are you sure'))" href="admin/comment/delete/{{$cm->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
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