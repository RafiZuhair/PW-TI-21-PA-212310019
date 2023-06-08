@extends('templates.layout')
@section('content')
<h1>Profile Page</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
    </tr>
    @
    foreach
    (
    $profiles

    as

    $profile
    )
    <tr>
        <td>{{ 
$profile
->nama }}</td>
        <td>{{ 
$profile
->npm }}</td>
        <td>{{ 
$profile
->jenis_kelamin }}</td>
        <td>{{ 
$profile
->tanggal_lahir->
format
(
'd/m/Y'
) }}</td>
        @endsection