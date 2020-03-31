@extends('common.layout')

@section('content')


<!-- のちの繰り返し構文用 -->
<!-- foreach mypatients as mypatinet  -->
<div class="mypatients-container">
    <!-- 本部分には不要？サイドバーで十分な可能性あり -->
    <!-- <div class="mypatients-container__link-box">
      <a class="mypatients-container__link-box__link" href="{{ url('mypatient') }}">Registaration of new patient</a>
    </div> -->

  @foreach($patients_in_charge as $patient)

  <div class="mypatient-wrapper">
    <div class="mypatient-upper-box">
      <div class="mypatient-upper-box__image-box">
        <div class="mypatient-upper-box__image-box__circle">
          <img class="patient_image" src="{{ asset('storage/images/'.$patient->image) }}">
        </div>
      </div>
      <div class="mypatient-upper-box__name-box">
        <h4 class="mypatient-upper-box__name-box__name">Patient's name:<br>{{ $patient->name }}</h4>
        <h5 class="mypatient-upper-box__name-box__age">Age: {{ $patient->age }}</h5>
      </div>

      <div class="mypatient-upper-box__info-box">
        <h5 class="mypatient-upper-box__info-box__issue-frame">Current issue: {{ $patient->sympton }}<br></h5>
      </div>
      
      <div class="mypatient-upper-box__date-box">
        <h5 class="mypatient-upper-box__date-box__last-date">Last treatment date:</h5>
        <h5 class="mypatient-upper-box__date-box__last-content">Last treatment:</h5>
        <h5 class="mypatient-upper-box__date-box__next-date">Next date: </h5>
      </div>

      <div class="mypatient-upper-box__message-box">
        <h5 class="mypatient-upper-box__message-box__notification">！</h5>
        <h5 class="mypatient-upper-box__message-box__message-link">メッセージを見る</h5>
      </div>
    </div>

    <div class="mypatient-lower-box">
      <button type="button" class="mypatient-lower-box__edit-button btn btn-primary">
        Edit
      </button>
      <div class="mypatient-lower-box__delete-button btn btn-secondary">
        Delete
      </div>
    </div>

  </div>

    @endforeach

</div>
<!-- endforeach -->

@endsection