@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="mb-2 text-dark font-weight-normal">Visitors</h5>
            <h2 class="mb-4 text-dark font-weight-bold">{{$vists}}</h2>
    
            <div class="text-center"><i style="font-size: 25px" class="fa fa-users  text-danger"></i></div>
            {{-- <p class="mt-4 mb-0">@lang('lang.number_of') @lang('lang.employees')</p> --}}
          </div>
        </div>
      </div>
    
      
    <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="mb-2 text-dark font-weight-normal">Meals</h5>
            <h2 class="mb-4 text-dark font-weight-bold">{{$meal}}</h2>
    
            <div class="text-center"><i style="font-size: 25px" class="fa fa-users  text-danger"></i></div>
            {{-- <p class="mt-4 mb-0">@lang('lang.number_of') @lang('lang.employees')</p> --}}
          </div>
        </div>
      </div>
    
    
      <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="mb-2 text-dark font-weight-normal">Category</h5>
            <h2 class="mb-4 text-dark font-weight-bold">{{$cats}}</h2>
    
            <div class="text-center"><i style="font-size: 25px" class="fa fa-users  text-danger"></i></div>
            {{-- <p class="mt-4 mb-0">@lang('lang.number_of') @lang('lang.employees')</p> --}}
          </div>
        </div>
      </div>
</div>

@endsection