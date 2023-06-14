@extends('layouts.main')
@section('title', 'eDuta - Form Edit')
@section('content')
<div class="card mt-4">
    <div class="card-header"><Strong> Form Data Pelamar</Strong></div>
    <div class="card-body ">
        @php
        $bidang_keahlian = explode(",", $plm->bidang_keahlian);
        @endphp
        <form action="/account/update/{{$plm->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" value="{{$plm->nik}}" readonly>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$plm->nama}}">
            </div>

            <Label>Gender</Label>

            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="pria" {{ ($plm->gender == 'pria') ? 'checked':''}}>
                <label>Pria</label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Wanita" {{ ($plm->gender == 'Wanita') ? 'checked':''}}>
                <label>Wanita</label>
            </div>

            <label>Tingkat Pendidikan</label>
            <div class="form-group">
                <select name="Tinpend" class="form-control">
                    <option value="0">--Pilih Tingkat Pendidikan Terakhir--</option>
                    <option value="SD" {{ ($plm->tingkat_pendidikan == 'SD') ? 'selected':''}}>SD</option>
                    <option value="SMP" {{ ($plm->tingkat_pendidikan == 'SMP') ? 'selected':''}}>SMP</option>
                    <option value="SMA"{{ ($plm->tingkat_pendidikan == 'SMA') ? 'selected':''}}>SMA</option>
                    <option value="S1" {{ ($plm->tingkat_pendidikan == 'S1') ? 'selected':''}}>S1</option>
                </select>
            </div>

            <label>Bidang Keahlian</label>
            <div class="form-check">
                <input type="checkbox" name="bidkeah[]" class="form-check-input" value="WEB" {{ in_array('WEB', $bidang_keahlian) ? 'checked':''}}>
                <label>WEB Developer</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="bidkeah[]" class="form-check-input" value="Administrasi" {{ in_array('Administrasi', $bidang_keahlian) ? 'checked':''}}>
                <label>Administrasi</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="bidkeah[]" class="form-check-input" value="Data" {{ in_array('Data', $bidang_keahlian) ? 'checked':''}}>
                <label>Data Analyst</label>
            </div>

            <div class="form-group">
                <button type=submit role="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection