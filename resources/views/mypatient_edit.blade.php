@extends('common.layout')

@section('content')

<div class="new-patient__create-wrapper">
  <div class="new-patient__research-box">
    <h3>検索する</h3>
    <input class="new-patient__serach-box" type="text" placeholder="患者名を検索">
    <div class="new-patient__serach-box__display"></div>
  </div>

  <div class="new-patient__create-box">
    <h3>新規作成する</h3>
  <form method='POST' action="{{ route('mypatient_create') }}" enctype="multipart/form-data"> 
  @csrf
    <div class="new-patient__create-box__name">
      <div class="form-group">
        <label>名前</label>
        <input type="text" class="form-control" name="name" placeholder="{{ $patient_tobe_edit->name }}">
      </div>
    </div>
    <div class="new-patient__create-box__age">
      <div class="form-group">
        <label>年齢</label>
        <input type="text" class="form-control" name="age" placeholder="{{ $patient_tobe_edit->age }}">
      </div>
    </div>
    <div class="new-patient__create-box__image">
      <div class="form-group">
        <label>顔写真</label>
        <input type="file" id="file1" name='image' class="form-control-file">
      </div>
    </div>
    <div class="new-patient__create-box__sympthon">
      <div class="form-group">
        <label>症状</label>
        <textarea class="form-control" name="sympthon" placeholder="{{ $patient_tobe_edit->sympton }}"></textarea>
      </div>
    </div>
    <input type="submit">

  </form>
  </div>
</div>



@endsection