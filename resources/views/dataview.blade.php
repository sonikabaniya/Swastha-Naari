@extends('base')

@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Weight</th>
            <th scope="col">Blood Pressure</th>
            <th scope="col">Menopause</th>
            <th scope="col">History</th>
            <th scope="col">No of children</th>
            <th scope="col">Other Illness</th>
            <th scope="col">Protection Used</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($datas as $data)
          <tr>
            
            <td>{{ $data -> firstname }}</td>
            <td>{{ $data -> lastname }}</td>
            <td>{{ $data -> weight }}</td>
            <td>{{ $data -> bp }}</td>
            <td>{{ $data -> menopause }}</td>
            <td>{{ $data -> history }}</td>
            <td>{{ $data -> noofchildren }}</td>
            <td>{{ $data -> otherillness }}</td>
            <td>{{ $data -> protectionuse }}</td>
            
          </tr>
          @endforeach
        
        </tbody>
      </table>

@endsection
