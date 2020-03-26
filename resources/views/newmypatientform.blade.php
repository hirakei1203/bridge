@extends('common.layout')

@section('content')

<div class="new-patient__create-wrapper">
  <div class="new-patient__research-box">
    <h3>検索する</h3>
  </div>

  <div class="new-patient__create-box">
   <div class="new-patient__create-box__name">
     <label>名前</label>
     <input type="text" class=""
   <form method='POST' action="{{ route('mypatient_create') }}" enctype="multipart/form-data">
  </div>
</div>

@endsection