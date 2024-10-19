@extends('adminApp')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                            <img src="{{ asset('assets/backend/images/dashboard/Group126@2x.png') }}" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-4 col-sm-4 col-xl-4 pl-0 text-center">
                            <h2 class="text-white">Edit Service</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center align-self-start justify-content-between">
                                <h3 class="mb-0 text-white">Edit Service Form</h3>
                                <a href="{{ route('admin.service_list') }}" class="btn btn-primary btn-sm">Back</a>
                            </div>
                            <hr class="bg-white">
                        </div>

                        <div class="col-12">
                            <form action="{{ route('admin.servicupdate', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                              
                                <div class="form-group">
                                    <label for="heading" class="text-white">Heading Name</label>
                                    <input type="text" name="heading" class="form-control" id="heading" placeholder="Heading Name" value="{{ old('heading', $data->heading) }}">
                                    @error('heading')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="content" class="text-white">Content</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Content">{{ old('content', $data->content) }}</textarea>
                                    @error('content')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="content" class="text-white">Images</label>
                                    @if($data->image_path)
                                    <img src="{{ asset('storage/' . $data->image_path) }}" alt="Image" class="rounded-0" style="width: 100px; height: auto; margin-right: 5px;">
                                @else
                                    No image available.
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1" class="text-white">Upload Images</label>
                                    <input type="file" name="images" class="form-control text-white w-100" id="exampleFormControlFile1"  accept=".jpeg, .jpg, .png">
                                    @error('images')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm" style="float: inline-end;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
