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
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Borrowing Requests</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <br>
                    <div class="col-sm-6 col-md-3">
                        <a href="{{ route('mostbrrowed') }}" class="btn btn-primary-gradient btn-block">Most Borrowed
                            Customers</a>
                    </div>
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
                                                <a href="{{ route('delete.brrow', $b->id) }}"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                        fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                    <!-- <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script> -->
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
