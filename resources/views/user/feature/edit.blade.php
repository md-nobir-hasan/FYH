@extends('backend.layouts.app')

@section('title', 'Feature Management')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">
                            <h4>Update feature</h4>
                        </span>
                        <span class="float-right">
                            <a href="{{ route('setting.feature.index') }}" class="btn btn-info">Back</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 m-auto">
                                <form method="post" action="{{ route('setting.feature.update',[$feature->id]) }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-form-label">Feature key <span
                                                class="text-danger">*</span></label>
                                        <input id="inputTitle" type="text" name="name" placeholder="Enter name"
                                            value="{{ $feature->name }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-success" type="submit">Update</button>
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
