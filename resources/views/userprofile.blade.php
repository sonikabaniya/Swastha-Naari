@extends('layouts.app')

@section('content')

@extends('includes.left_navbar')

<div id = "main-wrapper">

<div>
<h3>Welcome, {{  $datas->name }}</h3>
    <img src = "{{ asset("img/1.jpg") }}" alt=" " width="42" height="42">
</div>

<h6>Name: {{  $datas->name    }}</h6>
<h6>Email: {{  $datas->email    }}</h6>
<h6>User Role:   @if($datas->role == 1)
                        SuperAdmin
                    
                    @elseif($datas->role == 2)
                        Organizational Admin
                    
                    @else
                        User
                    @endif
                      </h6>

</div>

@endsection
