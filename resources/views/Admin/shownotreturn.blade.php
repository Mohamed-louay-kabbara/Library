<!DOCTYPE html>
<html>

<head>
    <title> show Brrows </title>
    @extends('layouts.master')
    @section('css')
        <!-- Internal Data table css -->
        <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @endsection
    @section('page-header')
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mainStyle.css">
    </head>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <!-- <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Borrowing Requests</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div> -->
                    <br>
                    <!-- <div class="col-sm-6 col-md-3">
                        <a href="{{ route('mostbrrowed') }}" class="btn btn-primary-gradient btn-block">Most Borrowed
                            Customers</a>
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0"> Name Books</th>
                                        <th class="wd-15p border-bottom-0">Name User</th>
                                        <th class="wd-20p border-bottom-0">Auther Name</th>
                                        <th class="wd-15p border-bottom-0">Price</th>
                                        <th class="wd-10p border-bottom-0">Phone</th>
                                        <th class="wd-10p border-bottom-0">Addrress</th>
                                        <th class="wd-25p border-bottom-0">First Date</th>
                                        <th class="wd-10p border-bottom-0">Last Date</th>
                                        <th class="wd-10p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brrow as $b)
                                        <tr>
                                            <td>{{ $b->book->name }}</a>
                                            </td>
                                            <td>
                                                {{ $b->user->name }}
                                            </td>
                                            <td>
                                                {{ $b->book->author_name }}
                                            </td>
                                            <td>
                                                {{ $b->book->price }}
                                            </td>
                                            <td>
                                                {{ $b->user->phone }}
                                            </td>
                                            <td>
                                                {{ $b->user->address }}
                                            </td>
                                            <td>
                                                {{ $b->firstData }}
                                            </td>
                                            <td>
                                                {{ $b->lastData }}
                                            </td>
                                            <td>
                                <a href="{{ route('notif', $b->user->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                    </svg><a>
                            </td>
                                        </tr>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                    </table>
                @endsection
                @section('js')
                    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
                    <!--Internal  Datatable js -->
                    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
                    <script src="js/all.min.js"></script>
                    <script src="js/bootstrap.bundle.min.js"></script>
                    <script src="js/bootstrap.bundle.min.js.map"></script>
                @endsection
