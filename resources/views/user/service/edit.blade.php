@extends('backend.layouts.app')

@section('title', 'Service Management')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">
                            <h4>Update Services</h4>
                        </span>
                        <span class="float-right">
                            <a href="{{ route('setting.setup.services.index') }}" class="btn btn-info">Back</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 m-auto">
                                <form method="post" action="{{ route('setting.setup.services.update',[$service->id]) }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-form-label">Name <span
                                                class="text-danger">*</span></label>
                                        <input id="inputTitle" type="text" name="name" placeholder="Enter name"
                                            value="{{$service->name}}" class="form-control" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="main_key_id" class="col-form-label">To <span
                                                class="text-danger">*</span></label>
                                                <select name="main_key_id" id="main_key_id" class="form-control" required>
                                                    <option value="">Select Where this feature implement</option>
                                                    @foreach ($main_keys as $key)
                                                        <option value="{{$key->id}}" @if($key->id == $service->main_key_id) selected @endif >{{$key->name}}</option>
                                                    @endforeach
                                                </select>

                                        @error('main_key_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="checking" class="col-form-label">What to check </label>
                                        <input id="checking" type="text" name="checking" placeholder="What you want to check in this service"
                                            value="{{$service->checking}}" class="form-control">
                                        @error('checking')
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
