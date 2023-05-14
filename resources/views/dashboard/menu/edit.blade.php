@extends('dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Add Meal</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{route('dashboard.menu.index')}}">Menu</a></li>
        <li class="breadcrumb-item active"><a href="{{route('dashboard.menu.edit',$data->id)}}">Edit Meal</a></li>
      </ol>
    </nav>
    
  </div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Meal</h4>
            <form class="forms-sample" method="POST" action="{{route('dashboard.menu.update',$data->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{old('name',$data->name)}}" placeholder="Name">
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Price</label>
                            <input type="text" class="form-control" name="price" id="exampleInputName1" value="{{old('price',$data->price)}}" placeholder="Price">
                            @error('price')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Category</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach ($cats as $d )
                                <option value="{{old('category_id',$d->id)}}" {{old('category_id',$d->id) == $data->category_id ? 'selected': ''}}>{{$d->name}}</option>
                                    
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Description</label>
                            <textarea name="note" class="form-control" id="" cols="30" rows="10">{{old('note',$data->price)}}</textarea>
                            @error('note')
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
                          <img src="{{asset('uploads/menus/'.$data->image)}}" class="w-25" alt="">
                          <div id="img-preview"></div>
                
                    </div>


                  
                </div>
              
            
            
              <button type="submit" class="btn btn-primary mr-2">@lang('lang.submit')Save</button>
              <a href="{{route('dashboard.menu.index')}}" class="btn btn-light">Cencel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

@section('js')
@endsection