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
                  <h2 class="text-white">Services list </h2>
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
                  <h3 class="mb-0 text-white">Services list</h3>
                  <a href="{{route('admin.add')}}" class="btn btn-primary btn-sm">add service</a>
                
                </div>
                <hr class="bg-white">
              </div>
              <div class="col-12">
                <table class="table table-sm">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Content</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($data) > 0)
                        @foreach($data as $key => $d)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>  <!-- Displays the row number -->
                            <td>{{ $d->heading }}</td>          <!-- Replace with actual property names -->
                            <td>
                                {{ \Illuminate\Support\Str::words($d->content, 10, '...') }}
                            </td>
                            <td>
                                @if($d->image_path)
                                   
                                      <img src="{{ asset('storage/' . $d->image_path) }}" alt="Image" class="rounded-0" style="width: 50px; height: auto; margin-right: 5px;">
                                @else
                                    No image available.
                                @endif
                            </td>
                            <td>
                            <a href="{{route('admin.servicEedit',['id'=>$d->id])}}" class="btn btn-success btn-sm">Edit</a>    
                            <a href="{{route('admin.servicDelete',['id'=>$d->id])}}" class="btn btn-danger btn-sm">Delete</a>  
                            </td>            <!-- Replace with actual property names -->
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No records found.</td>  <!-- colspan to span across columns -->
                        </tr>
                    @endif
                    
                    
                    </tbody>
                  </table>
                  
                  
              </div>
             
            </div>
           
          </div>
        </div>
      </div>
    
    </div>
    
  </div>
@endsection