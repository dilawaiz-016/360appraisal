
@extends('../master')

@section('title' , 'OtherEvaluation')

@section('css')

@endsection

@section('content')





  <div class="container p-5">
    <p class="text-center p-3 alert alert-warning"><b>Note:</b> honest , when you do others Evaluation because it's better for organization environment.
    </p>
    <div class="row">
      <div class="col-md-5 col offset-md-3 mt-2 p-5"  style="height:30vh; background:#da70d6; border-radius:10%;">
      <a class="filled-button" href="/list/senior">Senior managment   </a>
        <a class="filled-button" href="/list/junior">Junior managment </a>

      </div>
    </div>
    
  </div>

 @include('../mfooter') 

@endsection