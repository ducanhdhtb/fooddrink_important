@extends('admin.master')
@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $errs)
                        <div class="alert alert-danger">
                            {{$errs}}
                        </div>
                        @endforeach
                    @endif
                    @if(Session('flash'))
                     <div class="alert alert-danger">{{Session('flash')}}</div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/category/add" method="POST">
                             {{ csrf_field() }}
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Category Keywords" />
                            </div>                          
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection