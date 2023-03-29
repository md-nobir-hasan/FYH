@extends('backend.layouts.app')

@section('title', 'User Management')

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
                            <h4>Add user</h4>
                        </span>
                        <span class="float-right">
                            <a href="{{ route('setting.user.index') }}" class="btn btn-info">Back</a>
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
                                <form method="POST" action="{{ route('setting.user.store') }}">
                                    @csrf

                                    <input type="hidden" name='user_id'
                                        @isset($user)  value="{{ $user->id }}" @endisset>

                                    <div class="form-group">
                                        <label for="user" class="col-form-label">User name<span
                                                class="text-danger">*</span></label>
                                        <input id="user" type="text" name="name" placeholder="Enter a user name"
                                            @if (isset($user)) value="{{ $user->name }}" @else value="{{ old('user') }}" @endif
                                             class="form-control" required>
                                        @error('user')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-form-label">User Phone<span
                                                class="text-danger">*</span></label>
                                        <input id="phone" type="tel" name="phone" placeholder="Enter a phone number"
                                            @if (isset($user)) value="{{ $user->phone }}" @else value="{{ old('phone') }}" @endif
                                             class="form-control" required>
                                        @error('phone')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-form-label">User email<span
                                                class="text-danger">*</span></label>
                                        <input id="email" type="email" name="email" placeholder="Enter a email"
                                            @if (isset($user)) value="{{ $user->email }}" @else value="{{ old('email') }}" @endif
                                             class="form-control" required>
                                        @error('email')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="role" class="col-form-label">User role<span
                                                class="text-danger">*</span></label>
                                             <select name="role_id" id="role" class="form-control">
                                                <option value="" hidden>Select user role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}" @if (isset($user)) @if($user->role_id == $role->id) selected @endif @endif>{{$role->name}}</option>
                                                @endforeach
                                             </select>
                                        @error('role')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-form-label">User Address<span
                                                class="text-danger">*</span></label>
                                             <textarea name="address" id="address" cols="15" rows="6" class="form-control" placeholder="Enter User Address"></textarea>
                                        @error('address')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password<span
                                                class="text-danger">*</span></label>
                                        <input id="password" type="password" name="password" placeholder="Enter a password"
                                            @if (isset($user)) value="{{ $user->password }}" @else value="{{ old('password') }}" @endif
                                             class="form-control" required>
                                        @error('password')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password" class="col-form-label">Confirm_password<span
                                                class="text-danger">*</span></label>
                                        <input id="confirm_password" type="password" name="confirm_password" placeholder="Enter a confirm_password"
                                            @if (isset($user)) value="{{ $user->confirm_password }}" @else value="{{ old('confirm_password') }}" @endif
                                             class="form-control" required>
                                        @error('confirm_password')
                                            <p class="text-danger fst-italic">{{ $message }}</p>
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

