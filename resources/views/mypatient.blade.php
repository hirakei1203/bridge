@extends('common.layout')

@section('content')


<!-- のちの繰り返し構文用 -->
<!-- foreach mypatients as mypatinet  -->
  <div class="mypatient-container">
    <div class="mypatient-image-box">
      <img src="../../public/images/img1.css" class="mypatient-image">
    </div>
    <div class="mypatient-name-box">
      <h4 class="mypatient-name">Patient's name: Mickeal Jackson</h4>
      <h5 class="mypatient-age">Patient's age: 29</h5>
    </div>

    <div class="mypatient-treatment-info-box">
      <h5 class="mypatient-issue-frame">Current issue:</h5>
    </div>

  </div>

<!-- endforeach -->

@endsection