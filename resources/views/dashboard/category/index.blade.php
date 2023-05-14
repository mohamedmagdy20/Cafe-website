@extends('dashboard')

@section('content')

<div class="page-header">
  <h3 class="page-title"> Category</h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active"><a href="{{route('dashboard.category.index')}}">Cateogry</a></li>
   
    </ol>
  </nav>
  
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-6">
            <h4 class="card-title">Category</h4>
          </div>
      <div class="col-md-6">
        <a href="{{route('dashboard.category.create')}}" class="btn btn-success">Add<i class="fa fa-plus" style="font-size: 15px;"></i></a>
      </div>
           </div>

        
        <div class="table-responsive">
            <table class="table table-striped" id="user-table">
                <thead>
                  <tr>
                    <th> name</th>
                    <th> actions </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('dashboard.category.edit',$d->id)}}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="{{route('dashboard.category.delete',$d->id)}}"><i class="fa fa-trash"s></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
           
        </div>
        </div>
    </div>
  </div>
@endsection

@section('js')
{{-- <script src="{{asset('datatables/user.js')}}"></script> --}}



@endsection