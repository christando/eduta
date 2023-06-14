@extends('layouts.main')
@section('title', 'eDuta - Home')
@section('content')
<h3>selamat datang {{Auth::user()->nama_user ?? ''}}</h3>
@endsection