@extends('website.layouts.app')
@section('front')


<!-- Start slides -->
<div id="slides" class="cover-slides">
  <ul class="slides-container">
    
    @foreach ($header as $item)
    
    <li class="text-center">
      <img src="{{asset('uploads/headers/'.$item->image)}}" alt="">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="m-b-20"><strong><br>{{$item->title}}</strong></h1>
            <p class="m-b-40">{{$item->body}}</p>
          </div>
        </div>
      </div>
    </li>
    @endforeach
    
  </ul>
  <div class="slides-navigation">
    <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
  </div>
</div>
<!-- End slides -->

<!-- Start About -->


@foreach ($banners as $item )

<div class="about-section-box">
  
  <div class="container">
    
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('uploads/banners/'.$item->image)}}" alt="" class="img-fluid" >
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
        <div class="inner-column">
          <h1>{{$item->title}}</h1>
          <p>{!! $item->body !!}</p>
          <ul>
            <li><a href="{{route('menu')}}" class="btn btn-dark">See Menu</a></li>
          </ul>
        </div>
      </div>  
      
    </div>

  </div>

</div>
@endforeach

<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto text-left">
        <p class="lead ">
          " If you're not the one cooking, stay out of the way and compliment the chef. "
        </p>
        <span class="lead">Michael Strahan</span>
      </div>
    </div>
  </div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-title text-center">
          <h2>Special Meals</h2>
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
    <a class="text-center btn btn-dark" href="{{route('menu')}}">See All Menu</a>

  </div>
</div>
<!-- End Menu -->

{{-- <!-- Start Gallery -->
<div class="gallery-box">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-title text-center">
          <h2>Gallery</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
        </div>
      </div>
    </div>
    <div class="tz-gallery">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-01.jpg">
            <img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-02.jpg">
            <img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-03.jpg">
            <img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
          </a>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-04.jpg">
            <img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-05.jpg">
            <img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
          </a>
        </div> 
        <div class="col-sm-6 col-md-4 col-lg-4">
          <a class="lightbox" href="images/gallery-img-06.jpg">
            <img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Gallery --> --}}


@endsection