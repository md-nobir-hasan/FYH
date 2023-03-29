@extends('backend.layouts.app')

@section('title', 'Role Management')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/summernote/summernote.min.css') }}">
@endpush

@push('page_css')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">
                            <h4>Add role</h4>
                        </span>
                        <span class="float-right">
                            <a href="{{ route('setting.role.index') }}" class="btn btn-info">Back</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 m-auto">

                                @if (session()->has('message'))
                                    <div class="alert text-white" style="background-color: #28a745">
                                        {{ @session('message') }}</div>
                                @endif
                                {{-- Permission  --}}
                                <form method="POST" action="{{ route('setting.role.store') }}">
                                    @csrf

                                    <input type="hidden" name='role_id'
                                        @isset($role)  value="{{ $role->id }}" @endisset>
                                    <div class="form-group">
                                        <label for="role" class="col-form-label">Role name<span
                                                class="text-danger">*</span></label>
                                        <input id="role" type="text" name="role" placeholder="Enter a role name"
                                            @if (isset($role)) value="{{ $role->name }}" @else value="{{ old('role') }}" @endif
                                             class="form-control" required>

                                        @error('role')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="form-group text-center">
                                        <label for="permissions" class="col-form-label">Permissions <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="accordion mt-2" id="accordionExample">
                                            @foreach ($features as $feature)
                                                <div class="card">
                                                    <div class="card-header" id="{{ $feature->id }}">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left" type="button"
                                                                data-toggle="collapse" data-target="#n{{ $feature->id }}"
                                                                aria-expanded="true" aria-controls="n{{ $feature->id }}">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input name="feature[{{ $loop->index }}][name]"
                                                                        type="checkbox" value="{{ $feature->id }}"
                                                                        class="custom-control-input"
                                                                        id="f{{ $loop->index }}"
                                                                        @if (isset($role)) {{ $role->permissionCheck($feature->id) ? 'checked' : '' }} @else checked @endif>

                                                                    <label class="custom-control-label"
                                                                        for="f{{ $loop->index }}">{{ $feature->name }}</label>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="n{{ $feature->id }}"
                                                        class="collapse @if ($loop->first) show @endif"
                                                        aria-labelledby="{{ $feature->id }}"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body d-flex justify-content-center">
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                <input type="checkbox"
                                                                    name="feature[{{ $loop->index }}][add]"
                                                                    class="custom-control-input"
                                                                    id="add{{ $feature->id }}" value="yes"
                                                                    @if (isset($role)) {{ $role->permissionCheck($feature->id) ? ($role->permissionCheck($feature->id)->add ? 'checked' : '') : '' }} @else checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="add{{ $feature->id }}">Add</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                <input type="checkbox"
                                                                    name="feature[{{ $loop->index }}][show]"
                                                                    class="custom-control-input"
                                                                    id="show{{ $feature->id }}" value="yes"
                                                                    @if (isset($role)) {{ $role->permissionCheck($feature->id) ? ($role->permissionCheck($feature->id)->show ? 'checked' : '') : '' }} @else checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="show{{ $feature->id }}">Show</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                <input type="checkbox"
                                                                    name="feature[{{ $loop->index }}][edit]"
                                                                    class="custom-control-input"
                                                                    id="edit{{ $feature->id }}" value="yes"
                                                                    @if (isset($role)) {{ $role->permissionCheck($feature->id) ? ($role->permissionCheck($feature->id)->edit ? 'checked' : '') : '' }} @else checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="edit{{ $feature->id }}">Edit</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                <input type="checkbox"
                                                                    name="feature[{{ $loop->index }}][delete]"
                                                                    class="custom-control-input"
                                                                    id="Delete{{ $feature->id }}" value="yes"
                                                                    @if (isset($role)) {{ $role->permissionCheck($feature->id) ? ($role->permissionCheck($feature->id)->delete ? 'checked' : '') : '' }} @else checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="Delete{{ $feature->id }}">Delete</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('permissions')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn-success w-100" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

