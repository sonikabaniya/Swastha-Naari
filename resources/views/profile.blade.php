@extends('layouts.app')

@section('content')

@extends('includes.left_navbar')

<div id = "main-wrapper">

<div>
<h3><u>Patient's Profile</u></h3>
    {{-- <img src = "{{ asset("img/1.jpg") }}" alt=" " width="42" height="42"> --}}
</div>

<h6><strong>First Name:</strong> {{  $datas->first_name    }}</h6>
<h6><strong>Last Name:</strong> {{  $datas->last_name    }}</h6>
<h6><strong>Guardian Name:</strong> {{  $datas->guardian_name    }}</h6>
<h6><strong>Weight:</strong> {{  $datas->weight   }}</h6>
<h6><strong>Blood Pressure:</strong> {{  $datas->bp    }}</h6>
<h6><strong>History:</strong> {{  $datas->history    }}</h6>
<h6><strong>Number of Children:</strong> {{  $datas->no_of_children    }}</h6>
<h6><strong>Menopause:</strong> {{  $datas->menopause    }}</h6>
<h6><strong>Other Illness:</strong> {{  $datas->other_illness    }}</h6>
<h6><strong>Protection Used:</strong> {{  $datas->protection_used    }}</h6>
<h6><strong>Data taken by:</strong> {{  $datas->taken_by   }}</h6>

</div>

@endsection
