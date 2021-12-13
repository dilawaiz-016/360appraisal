@extends('master')
@section('title' ,'main')
@section('css')
*{
    margin: 0;
    padding: 0;
    }
    #banner{
    background: linear-gradient(rgba(56, 79, 211, 0.5),#c850c0), url(https://winair.ca/wp-content/uploads/2019/01/Our-Team-Employee-Background-Image-.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
    
    }
    .banner-text{
        text-align: center;
        color: #fff;
        padding-top: 180px;
    }
    .banner-text h1{
        font-size: 50px;
        font-family: 'kaushan Script',cursive;
    }
    .banner-btn{
    margin: 90px auto 0;
    }
    .banner-btn a{
        width: 150px;
        display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
        text-decoration: none;
        display: inline-block;
        margin: o 10px;
        padding: 12px 0;
        color: #fff;
        border: .18px solid #fff;
       position: relative;
       z-index: 1;
       transition: color 0.5s;
       border-radius: 18px;
    
       -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      -moz-transition: all 0.4s;
      transition: all 0.4s;
    }
    .banner-btn a span{
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
    color: #a4c639;
        z-index: -1;
        transition: 0.5s;
        border-radius: 18px;
    
    }
    .banner-btn a:hover span{
        width: 100%;
    
        
    
    }
    .banner-btn a:hover{
        color: black;
    }
    
@endsection
@section('content')



<section id="banner">
    <div class="banner-text">
      <h1>
        360 DEGREE APPRAISAL SYSTEM
      </h1>
      <div class="banner-btn">
        <a href="admin console.html"><span></span>Admin</a>&nbsp;&nbsp;&nbsp;
        <a href="HR console.html"><span></span>HR</a>&nbsp;&nbsp;&nbsp;
        <a href="EmployeeConsole.php"><span></span>Employee</a>
      </div>
    </div>
  </section>
@endsection