@extends('dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Add Header</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{route('dashboard.headers.index')}}">Headers</a></li>
      </ol>
    </nav>
    
  </div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Headers</h4>
            <form class="forms-sample" method="POST" action="{{route('dashboard.headers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputName1" value="{{old('title')}}" placeholder="Enter Title">
                            @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" id="choose-file" class="form-control">
                            @error('image')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror                           
                          </div>

                          <div id="img-preview"></div>
                
                    </div>
            
              <button type="submit" class="btn btn-primary mr-2">Save</button>
              <a href="{{route('dashboard.headers.index')}}" class="btn btn-light">cencel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

@section('js')
@endsection