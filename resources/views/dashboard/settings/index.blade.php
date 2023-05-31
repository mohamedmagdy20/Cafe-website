@extends('dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">Settings</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{route('dashboard.abouts.index')}}">Settings</a></li>
      </ol>
    </nav>
    
  </div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Settings</h4>
            <form class="forms-sample" method="POST" action="{{route('dashboard.settings.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Website Name</label>
                            <input type="text" class="form-control" name="website_name" id="exampleInputName1" value="{{old('website_name',$data[0]->value)}}" placeholder="Enter Website Name">
                            @error('website_name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Phone</label>
                            <input type="text" class="form-control" name="phone" id="exampleInputName1" value="{{old('phone',$data[1]->value)}}" placeholder="Enter Phone">
                            @error('phone')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>


                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Fasebook</label>
                            <input type="url" class="form-control" name="facebook" id="exampleInputName1" value="{{old('facebook',$data[2]->value)}}" placeholder="Enter Fasebook">
                            @error('facebook')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Twitter</label>
                            <input type="url" class="form-control" name="twitter" id="exampleInputName1" value="{{old('twitter',$data[3]->value)}}" placeholder="Enter Twitter">
                            @error('twitter')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Instegram</label>
                            <input type="url" class="form-control" name="instegram" id="exampleInputName1" value="{{old('instegram',$data[4]->value)}}" placeholder="Enter Instegram">
                            @error('instegram')
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