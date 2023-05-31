@extends('dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">Edit Abouts</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{route('dashboard.abouts.index')}}">Abouts</a></li>
      </ol>
    </nav>
    
  </div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Abouts</h4>
            <form class="forms-sample" method="POST" action="{{route('dashboard.abouts.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputName1" value="{{old('title',$data->title)}}" placeholder="Enter title">
                            @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="body" class="body"  id="body" cols="30" rows="10">{!! $data->body !!}</textarea>
                            @error('body')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror                           
                          </div>
                
                    </div>
            
              <button type="submit" class="btn btn-primary mr-2">Save</button>
              <a href="{{route('dashboard')}}" class="btn btn-light">cencel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js" integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    CKEDITOR.replace('body');
</script>
@endsection