@extends('base')

@section('content')
<a class="btn btn-primary" href="{{ route('dataintakeroute') }}" role="button">डाटा लिनुहोस् </a>
&nbsp; &nbsp;
<a class="btn btn-primary" href="{{ route('dataviewroute') }}" role="button">डाटा हेर्नुहोस  </a>

@endsection