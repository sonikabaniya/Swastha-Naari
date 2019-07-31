
@extends('layouts.app')
{{-- @extends('base') --}}

@section("content")
@extends('includes.left_navbar')

<div id = "main-wrapper">

        <table class="table table-hover" id="data-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($healthcenters as $key =>$healthcenter)
                    
                <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$healthcenter->name}}</td>
                <td>{{$healthcenter->phone_number}}</td>
                <td>{{$healthcenter->address}}</td>
                <td><ion-icon name="create"></ion-icon> <ion-icon name="trash"></ion-icon></td>
                </tr>
                
                @endforeach
            </tbody>
        </table> 
    </div>

<script>
    $(document).ready( function () {
    $('#data-table').DataTable();
    $('#data-table_length').addClass('pull-right');
    $('#data-table_filter').addClass('pull-left');
});
</script>
@endsection