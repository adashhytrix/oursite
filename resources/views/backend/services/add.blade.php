@extends('adminApp')
@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="{{ asset('assets/backend')}}/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-4 col-sm-4 col-xl-4 pl-0 text-center">
                <span>
                  <h2 class="text-white"> Add New Service</h2>
                </span>
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
                  <h3 class="mb-0 text-white">Service form</h3>
                  <a href="{{route('admin.service_list')}}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <hr class="bg-white">
              </div>
              <div class="col-12">
                <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="heading" class="text-white">Heading name</label>
                      <input type="text" name="heading" class="form-control" id="heading" placeholder="Heading Name" value="{{old('heading')}}">
                      <small  class="form-text text-danger ">
                        @error('heading')
                        {{$message}}
                        @enderror
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="content" class="text-white">Content</label>
                      <br>
                     <textarea class="form-control"  name="content" id="" cols="30" rows="10" placeholder="Content">{{old('content')}}</textarea>
                     <small  class="form-text text-danger ">
                      @error('content')
                      {{$message}}
                      @enderror
                    </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="text-white">Upload images</label>
                        <input type="file" name="image" class="form-control text-white w-100" id="exampleFormControlFile1" multiple accept=".jpeg, .jpg, .png" value="{{old('image')}}">
                        <small  class="form-text text-danger ">
                          @error('image')
                          {{$message}}
                          @enderror
                        </small>
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