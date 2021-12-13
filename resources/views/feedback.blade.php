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
            <li><a href="#"><i class="fa fa-envelope"></i>360degreeapraisalsystem@gmail.com</a></li>

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

   
  </header>

  <div class="callback-form">
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
  </div>



  @include('../mfooter')
  
@endsection