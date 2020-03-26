@extends('common.layout')

@section('content')


<!-- のちの繰り返し構文用 -->
<!-- foreach mypatients as mypatinet  -->
<div class="mypatients-container">
    <div class="mypatient-wrapper">
      <div class="mypatient-wrapper__image-box">
        <div class="mypatient-wrapper__image-box__circle">
        </div>
      </div>
      <div class="mypatient-wrapper__name-box">
        <h4 class="mypatient-wrapper__name-box__name">Patient's name:<br>Mickeal Jackson</h4>
        <h5 class="mypatient-wrapper__name-box__age">Age: 29</h5>
      </div>

      <div class="mypatient-wrapper__info-box">
        <h5 class="mypatient-wrapper__info-box__issue-frame">Current issue:<br></h5>
      </div>
      
      <div class="mypatient-wrapper__date-box">
        <h5 class="mypatient-wrapper__date-box__last-date">Last treatment date:</h5>
        <h5 class="mypatient-wrapper__date-box__last-content">Last treatment:</h5>
        <h5 class="mypatient-wrapper__date-box__next-date">Next date: </h5>
      </div>

      <div class="mypatient-wrapper__message-box">
        <h5 class="mypatient-wrapper__message-box__notification">！</h5>
        <h5 class="mypatient-wrapper__message-box__message-link">メッセージを見る</h5>
      </div>

    </div>
</div>
<!-- endforeach -->

@endsection