@extends('backend.layouts.app')

@section('title', 'User Management')

@push('third_party_stylesheets')
    <link href="{{ asset('assets/backend/js/DataTable/datatables.min.css') }}" rel="stylesheet">
@endpush

@push('page_css')
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                @if(session()->has('message'))
                    <div class="alert text-white" style="background-color: #28a745">{{ @session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">
                            <h1>View user</h1>
                        </span>
                        <span class="float-right @if (!check('User Creation')->add) d-none @endif">
                            <a href="{{ route('setting.user.create') }}" class="btn btn-info">Create new user</a>
                        </span>
                    </div>
                    <div class="card-body">
                        @include('backend.partial.flush-message')

                        <div class="table-responsive">
                            <table id="table" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>User name</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="@if (!check('User Creation')->edit && !check('User Creation')->delete) d-none @endif"
                                        id="action">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="@if (!check('User Creation')->edit && !check('User Creation')->delete) d-none @endif">
                                        <a href="{{ route('setting.user.destroy', $user->id) }}" class="btn btn-danger btn-sm @if (!check('User Creation')->edit) d-none @endif"><i class="fas fa-trash"></i></a>

                                        <a href="{{ route('setting.user.create', $user->id) }}" class="btn btn-dark btn-sm @if (!check('User Creation')->delete) d-none @endif"><i class="fas fa-edit"></i></a>
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
    </div>

@endsection



@push('third_party_scripts')
    <script src="{{ asset('assets/backend/js/DataTable/datatables.min.js') }}"></script>
@endpush

@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'pdfHtml5',
                    title: 'User Management',
                    download: 'open',
                    orientation: 'potrait',
                    pagesize: 'LETTER',
                    exportOptions: {
                        columns: [0, 1, 2]
                    }
                },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    }, 'pageLength'
                ]
            });
        });
    </script>
@endpush
