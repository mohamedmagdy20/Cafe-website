@extends('website.layouts.app')
@section('front')
<div class="container">
    <br>
    <br>
    
    <div class="menu-box ">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-title text-center">
                <h2>All Meals</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="special-menu text-center">
                <div class="button-group filter-button-group">
      
                  <button class="active" data-filter="*">All</button>
                @foreach ($cats as $cat )
                  <button data-filter=".{{$cat->name}}">{{$cat->name}}</button> 
                @endforeach
                </div>
              </div>
            </div>
          </div>
            
          <div class="row special-list">
            @foreach ($data as $d )
              
            <div class="col-lg-4 col-md-6 special-grid {{$d->category->name}}">
              <div class="gallery-single fix">
                <img src="{{asset('uploads/menus/'.$d->image)}}" class="img-fluid" alt="Image">
                <div class="why-text">
                  <h4>{{$d->name}}</h4>
                  <p>{{$d->note}}</p>
                  <h5> {{$d->price}}</h5>
                </div>
              </div>
            </div>
            @endforeach
      
          </div>
          {{-- <a class="text-center btn btn-dark" href="{{route('menu')}}">See All Menu</a> --}}
      
        </div>
    </div>
      <!-- End Menu -->
      
    
</div>
<!-- Start Menu -->
@endsection