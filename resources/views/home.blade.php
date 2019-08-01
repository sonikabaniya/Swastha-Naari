@extends('layouts.app')

@section('content')
<div class="container" style="margin: 10%;" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('dataintakeroute') }}" role="button">डाटा लिनुहोस् </a>
                    &nbsp; &nbsp;
                    <a class="btn btn-primary" href="{{ route('dataviewroute') }}" role="button">डाटा हेर्नुहोस  </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
