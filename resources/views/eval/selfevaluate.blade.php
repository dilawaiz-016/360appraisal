@extends('../master')

@section('title' , 'Senior Managment')
@section('link')
<link rel="stylesheet" type=" text/css " href=" {{asset('css/SE.css')}} ">

@endsection

@section('content')

<div class="container-fluid " style=" background: linear-gradient(rgba(56, 79, 211, 0.5),#c850c0);">
  <div class="container bg-white">
    <div class="row">
    <span class="title text-center pt-5 text-white ">Fill this form and check out your evaluated performance</span>
      <div class="col-sm-6 offset-md-3 mt-5 border p-5" id="evelf" >
      <img
        class="demo-bg"
        src="{{asset('images/self Evaluation.png')}}"
        alt="">
        

        <form action="/selfevalstore" method="post" class="demo-content">
    @csrf
    
    <div >
    <p ><b>1. I know what the responsibilities of my jobs are:</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" required=“required” name="q1" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q1" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q1" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q1" value="4">Superior
        </label>
      </div>
    
    
    
    <p ><b>2. I know what my performance are:</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1"  required=“required” name="q2" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q2" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q2" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q2" value="4">Superior
        </label>
      </div>
    
    <p><b>3. I feel i can discuss my work problems:</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1"  required=“required” name="q3" value="1">Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q3" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q3" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q3" value="4">Superior
        </label>
      </div>
    <p ><b>4. I feel that i am a part of a productive work team: </b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" required=“required” name="q4" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q4" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q4" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q4" value="4">Superior
        </label>
      </div>
    <p><b>5.  I always know what my daily and weekly performance and goals are:</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1"  required=“required” name="q5" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q5" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q5" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q5" value="4">Superior
        </label>
      </div>
    <p ><b>6. I feel my workload is too heavy :</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" required=“required” name="q6" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q6" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q6" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q6" value="4">Superior
        </label>
      </div>


    <p ><b>7. I know what the long-term goals of the company are:</b></p>
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1"  required=“required” name="q7" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q7" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q7" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q7" value="4">Superior
        </label>
      </div>
    <p ><b>8. I feel i have had enough training to perform my job :</b></p>
     
    <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" required=“required”  id="radio1" name="q8" value="1" >Below Average
        </label>
      </div>
      
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="q8" value="2">Satisfactory
        </label>
      </div>
      
      
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q8" value="3">Above Average
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="q8" value="4">Superior
        </label>
      </div>
    
    
    
    </div >
    <br>
    <input type="submit" value="Submit" class="btn btn-success">
    <a href="/" class="btn btn-success">Back</a>
    </form>
      </div>
      <!-- <div class="col-sm-4 mt-5 p-5">

        <img src="{{asset('images/eval3.png')}}" class="floatRight" style="width: 500px;margin-top: 300px;">
      </div> -->
    </div>
    

  </div>
</div>

@endsection
