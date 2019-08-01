@extends('layouts.app')

@section('content')

<div style="margin:5%">

<div>
<h3>Welcome, {{  $datas->firstname ." ". $datas->lastname }}</h3>
    <img src = "{{ asset("img/1.jpg") }}" alt=" " width="42" height="42">
</div>

<h6>First Name: {{  $datas->firstname    }}</h6>
<h6>Last Name: {{  $datas->lastname    }}</h6>
<h6>Guardian Name: {{  $datas->guardianname    }}</h6>
<h6>Weight: {{  $datas->weight   }}</h6>
<h6>Blood Pressure: {{  $datas->bp    }}</h6>
<h6>History: {{  $datas->history    }}</h6>
<h6>Number of Children: {{  $datas->noofchildren    }}</h6>
<h6>Menopause: {{  $datas->menopause    }}</h6>
<h6>Other Illness: {{  $datas->otherillness    }}</h6>
<h6>Protection Used: {{  $datas->protectionuse    }}</h6>

</div>

@endsection
