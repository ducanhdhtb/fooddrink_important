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
               
                    @if(Session('flash'))
                    <div class="alert alert-danger">{{Session('flash')}}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Avartar</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Birthday</th>
                                <th>Joinning-day</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $customer)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $customer -> id }}</td>
                                <td>{{ $customer -> name }}</td>
                                <td><img width="70px" height="70px" src="uploads/avartar/{{ $customer->avartar }}" alt=""></td>
                                <td>{{ $customer -> email }}</td>
                                <td>{{ $customer -> address }}</td>
                                <td><?php if(($customer -> role) == 1 )
                                echo "Admin"; 
                                else 
                                echo "Normal" ; 
                                 
                                ?></td>
                                <td>{{ $customer -> birthday }}</td>
                                <td>{{ $customer -> created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Are you sure?')"" href="admin/user/delete/{{$customer->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$customer -> id}}">Edit</a></td>
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