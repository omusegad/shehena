@extends('layouts.app')

@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
            <div class="container">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h5 class="pl-4 text-white page-title">Welcome {{ ucfirst(Auth::user()->name) }}!</h5>
                        </div>
                    </div>
                </div>      <!-- /Page Header -->
            </div>
            <!-- Page Content -->
            <div class="content container">
                <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Customers | Dashboard</li>
                    </ul>
                </div>
                
                <div class="col-md-12 p-4 pb-5">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table table-condensed table-bordered" id="employeesTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Registered On</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th class="text-right no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                             @php ($count = 1)
                              @foreach($users as $user)
                                <tr>
                                    <td>{{$count++ }}</td>
                                    <td>{{$user->name }}</td>
                                    <td>{{$user->email }}</td>
                                    <td>{{$user->phoneNumber }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            </div>
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
        <!-- /Page Wrapper -->
@endsection
