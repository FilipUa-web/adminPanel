@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>Roles</h1>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li class="active"><a href="#">Roles</a></li>
                </ul>
            </div>
            <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered" id="roles">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->display_name}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-warning" href="#"><i class="fa fa-street-view">View</i></a>
                                            <a class="btn btn-info" href="#"><i class="fa fa-edit">Edit</i></a>
                                            <a class="btn btn-danger" href="#"><i class="fa fa-trash">Delete</i></a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')
    <script type="text/javascript" src="{{asset("js/plugins/jquery.dataTables.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/plugins/dataTables.bootstrap.min.js")}}"></script>
    <script type="text/javascript">$('#roles').DataTable();</script>
@endsection
