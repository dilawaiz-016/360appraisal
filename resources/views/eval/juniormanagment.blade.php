@extends('../master')

@section('title' , 'Junior Managment')
@section('link')
<link rel="stylesheet" type=" text/css " href=" {{asset('css/SE.css')}} ">

@endsection

@section('content')

<div class="container-fluid " style=" background: linear-gradient(rgba(56, 79, 211, 0.5),#c850c0);">
  <div class="container bg-white">
    <div class="row">
    <span class="title text-center pt-5 text-white ">Fill this form in order to evaluate others</span>
      <div class="col-sm-6 offset-md-3 mt-5 border p-5" id="evelf" style="">
      <img
        class="demo-bg"
        src="{{asset('images/eval5.png')}}"
        alt="">
      <form action="/seniormanagment" method="post" class="demo-content">
      @csrf
      

      {{-- <input type="hidden" name="fromuser" value="{{Auth::user()->id}}" /> --}}
      <input type="hidden" name="touser" value="{{$toid}}" />
      
      <div>
        <p class=""><b>1. Does he/she demonstrate a  positive attitude  and enthusiasm for the job?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" required=“required” name="q1" value="1" >Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q1" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q1" value="3">Satisfactory
          </label>
        </div>
        
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q1" value="4">Heigest Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q1" value="5">Excellent
          </label>
        </div>



        <p><b>2. Does he/she did work completely, accurately and timely? </b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" required=“required” id="radio1" name="q2" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2"  name="q2" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q2" value="3">Satisfactory
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q2" value="4">Heigest Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q2" value="5">Excellent
          </label>
        </div>

        <p><b>3. Does he/she is willing to accept responsibility for his or her own actions?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1"required=“required”  name="q3" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q3" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q3" value="3">Satisfactory
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q3" value="4">Heigest Satisfactory
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q3" value="5">Excellent
          </label>
        </div>

        <p><b>4. Does he/she handles disagreements professionally?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1"required=“required”  name="q4" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q4" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q4" value="3">Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q4" value="4">Heigest Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q4" value="5">Excellent
          </label>
        </div>
        <p><b>5. Does he/she complies with organization policies and procedures?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" required=“required” name="q5" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q5" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q5" required=“required” value="3">Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q5" value="4">Heigest Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q5" value="5">Excellent
          </label>
        </div>

        <p><b>6. Does he/she represents the company in a positive manner when interacting with outsider?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" required=“required” name="q6" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q6" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q6" value="3">Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q6" value="4">Heigest Satisfactory
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q6" value="5">Excellent
          </label>
        </div>


        <p><b>7. Does he/she shows initiative with developing new ways of thinking to improve projects or organization performance?</b></p>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" required=“required” name="q7" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q7" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q7" value="3">Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q7" value="4">Heigest Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q7" value="5">Excellent
          </label>
        </div>

        <p><b>8. Does he/she accepts constructive criticism without unfavorable responses?</b></p>

        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" required=“required” id="radio1" name="q8" value="1">Average
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="q8" value="2">Above average
          </label>
        </div>


        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q8" value="3">Satisfactory
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q8" value="4">Heigest Satisfactory
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="q8" value="5">Excellent
          </label>
        </div>



      </div>
      <br>
      <input type="submit" value="Submit" class="btn btn-success">
      <a href="/other-eval" class="btn btn-success">Back</a>
    </form>
      </div>
      <!-- <div class="col-sm-4 mt-5 p-5">

        <img src="{{asset('images/eval3.png')}}" class="floatRight" style="width: 500px;margin-top: 300px;">
      </div> -->
    </div>
    

  </div>
</div>

@endsection
