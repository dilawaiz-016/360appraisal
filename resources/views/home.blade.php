@extends('master')
@section('title' ,'Home')

@section('css')
.Modern-Slider .item-1 .img-fill {
	background-image: url({{asset('/images/SL-1.jpg')}});
}

.Modern-Slider .item-2 .img-fill {
	background-image: url({{asset('/images/SL-2.jpg')}});
}

.Modern-Slider .item-3 .img-fill {
	background-image: url({{asset('/images/SL-3.jpg')}});
}
@endsection
@section('content')


    <!-- ***** Preloader Start ***** -->
  
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-envelope"></i>360degreeappraisalsystem@gmail.com</a></li>

          </ul>
        </div>
        <div class="col-md-4">
          <ul style="position:relative;width:1008px;height:40px;display:block;">
    
            <li  style="position:absolute;right:500px;">
              @if (Route::has('login'))
       
                  @auth
                
                      <form action="{{route('logout')}}" method="post">
                        @csrf
                         <input type="submit" name="logout" value="logout" class="btn text-white" style="background:#43A350; "/>
                      </form>
                  @else
                      <a href="{{ route('login') }}" class="btn text-white " style="background:#43A350;">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="btn text-white" style="background:#43A350;">Register</a>
                      @endif
                  @endauth
           
          @endif
            </li>
            

          </ul>
        </div>
      </div>
    </div>
  </div>

   <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href ="/self-eval">Self Evaluation</a>
            </li>
 
              
              <a class="nav-link" href="/other-eval">Evaluate Others</a>
           
            </li>
            
            
            @auth 
            @cannot('isAdmin' , 'isHr')          
<li class="nav-item"> 
              <a class="nav-link" href="/feed">Feedback</a>
            </li>
            @endcan
            @endauth   
 @auth           
<li class="nav-item"> 
              <a class="nav-link" href="/prof/{{Auth::user()->id;}}">Profile</a>
            </li>
            @endauth        
             
            
            @can('isAdmin')           
<li class="nav-item"> 
              <a class="nav-link" href="/admin">Admin</a>
            </li>
            @endcan  

            @can('isHr')           
            <li class="nav-item"> 
                          <a class="nav-link" href="/hr">Hr</a>
                        </li>
                        @endcan  
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <!-- Page Content -->
  <!-- Banner Starts Here -->


@if (session()->has('success'))
<div class="alert alert-dismissable alert-success" id="mess">
    
    <strong>
        {!! session()->get('success') !!}
    </strong>
</div>

@endif


  <div class="main-banner header-text" id="top">
      <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
          <div class="img-fill">
              <div class="text-content">
  
                <h4> Without proper self-evaluation failure is inevitable</h4>
                <p>Ask yourself if what you're doing today is getting you closer to where you want to be tomorrow.</p>
                <a href="/self-eval" class="filled-button">Self Evaluation</a>
              </div>
          </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
          <div class="img-fill">
              <div class="text-content">
               
                <h4>Be honest,when you Evaluate your Colleagues</h4>
                <p>Don't be afraid to stand up for the truth , even if that means you will be standing alone.</p>
                <a href="/other-eval" class="filled-button">Evaluate Others</a>
              </div>
          </div>
        </div>
        <!-- // Item -->
        
      </div>
  </div>
  <!-- <div class="callback-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Feedback</h2>
            <span>Have some queries,suggestions and complaints?</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="/feedback" method="post">
              @csrf
              <div class="row">
              
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="sub" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="border-button">Submit</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
    </div>
  </div> -->

 
 

@endsection