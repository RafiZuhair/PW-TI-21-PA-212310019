@extends('templates.layout')

@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded shadow-sm">
    <!-- <img class="me-3" src="{{ url('./assets/media/icons/iconibik.png') }}" alt="icon-ibik" width="45" height="45"> -->
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
        <small>Since 2011</small>
    </div>
</div>
<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['students'] as $index => $result)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $result['npm'] }}</td>
                <td>{{ $result['name'] }}</td>
                <td>{{ $result['gender'] }}</td>
                <td>{{ $result['alamat'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-body">
        Welcome folks..
    </div>
</div>
@endsection