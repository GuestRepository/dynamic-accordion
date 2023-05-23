<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 310px;
  }
.container{
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    max-width: 1300px;
  width: 100%;
}

.blog-post{
    position: relative;
}

.blog-post img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
    margin:10px;
}

.blog-post .category{
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px 15px;
  font-size: 14px;    text-decoration: none;
    background-color: #e67e22;
    color: #fff;
    border-radius: 5px;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);
    text-transform: uppercase;
}
.text-content{
    position: absolute;
    bottom: -30px;
    padding: 20px;
    background-color: #fff;
    width: calc(100% - 20px);
    left: 50%;
    transform: translateX(-50%);
    border-radius: 10px;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);
    padding-top: 50px;
}

.text-content h2{
    font-size: 20px;
    font-weight: 400;
    margin-bottom: 30px;
}

.text-content img{
    height: 70px;
    width: 70px;
    border: 5px solid rgba(0,0,0,0.1);
    border-radius: 50%;
    position: absolute;
    top: -35px;
    left: 35px;
}

.tags a{
    color: #888;
    font-weight: 700;
    text-decoration: none;
    margin-right: 15px;
    transition: 0.3s ease;
}

.tags a:hover{
    color: #000;
}

@media screen and (max-width: 1100px) {
    .container{
        grid-template-columns: 1fr 1fr;
        grid-row-gap: 60px;
    }
}

@media screen and (max-width: 600px) {
    .container{
        grid-template-columns: 1fr;
        grid-row-gap: 60px;
    }
}


  </style>

  


<div class="container-fluid">
    <div class="row bg-primary">
        <div class="col-sm-3">logo</div>
        <div class="col-sm-2"></div>
        <div class="col-sm-3 mt-2">


            Phone: +971 00000000 <br>
            Email: info@uae-stationery.com

        </div>
        <div class="col-sm-3">
            <button class="btn btn-success mt-2">Make An Appointment</button>
        </div>

    </div>
</div>
@extends('layouts.master')

@section('content')





<!-- slider open -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('assets/img/slider-1.jpg')}}" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="{{url('assets/img/slider-2.jpg')}}" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="{{url('assets/img/slider-1.jpg')}}" alt="New York">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- slider close -->


<!-- main content open -->

<!-- services open -->
<div class="container">
        <div class="blog-post">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="https://youtu.be/SdNaoYS_6Fo" target="_blank" class="category">
            BUsiness Card
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-1.jpg')}}" alt="">
                <h2 class="post-title">
                Business Card Printing Services
                </h2>
                <div class="tags">
                   <button class="btn btn-outline-warning"> <a href="{{route('show.details')}}" target="_blank" class="text-white" > views </a></button>
                   <button class="btn btn-outline-warning">  <a href="{{route('show.details')}}" target="_blank" class="text-white"> booked</a> </button>
                </div>
            </div>
        </div>

        <div class="blog-post">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
            Toner Services
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-2.jpg')}}" alt="">
                <h2 class="post-title">
                All Printer Toner Services in UAE
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>

        <div class="blog-post">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
            Flyers Printing
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-3.jpg')}}" alt="">
                <h2 class="post-title">
                Flyers And Printing Services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>

        <div class="blog-post">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
            Bill Book
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-4.jpg')}}" alt="">
                <h2 class="post-title">
                Bill Book Printing Services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>
        <div class="blog-post mt-2">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
            Letter Head
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-5.jpg')}}" alt="">
                <h2 class="post-title text-white">
                Letter Head Printing Services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>
        <div class="blog-post mt-2">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
                Official Stationery
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-7.jpg')}}" alt="">
                <h2 class="post-title text-white">
                Official Stationery Services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>
        <div class="blog-post mt-2">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
            Stationery All
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-8.jpg')}}" alt="">
                <h2 class="post-title text-white">
                Stationery All Items Services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>
        <div class="blog-post mt-2">
            <img src="{{url('assets/img/service-default.jpg')}}" alt="Man">
            <a href="#" target="_blank"  class="category">
                All Stamp
            </a>
            <div class="text-content bg-secondary">
                <img src="{{url('assets/img/service-9.jpg')}}" alt="">
                <h2 class="post-title text-white">
                    All Stamp Making services
                </h2>
                <div class="tags">
                    <a href="#" target="_blank" >#design</a>
                    <a href="#" target="_blank" >#photo</a>
                </div>
            </div>
        </div>
    </div>
<!-- services close -->





@endsection
