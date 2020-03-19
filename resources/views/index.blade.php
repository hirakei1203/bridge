@extends('common.layout')


@section('content')

<div class="row article-main">
  <div class="entrance-container">
        <div class="entrance-title">
          <h2>Our Goal</h2>
        </div>
        <div class="entrance-message">
          For smooth commnunication between dentist and patient.
        </div>
  </div>
  

  <div class="top-below-container">
    <div class="registration-sign">
        <h2 class="registration-message">
        <span class="glyphicon glyphicon-arrow-down"></span>
        Resistration is here!
        <span class="glyphicon glyphicon-arrow-down"></span>
        </h2>
    </div>

    <div class="registration-container">
      <div class="each-registration-container">
          <a href="#">
          <div class="index-message">For dentist</div>
          <div class="regi-content dentist-registration"></div>
          </a>
      </div>
      
      <div class="each-registration-container">
        <a href="#">
          <div class="index-message">For Patient</div>
          <div class="regi-content patient-registration"></div>
        </a>
      </div>
    </div>

  </div>
</div>

@endsection