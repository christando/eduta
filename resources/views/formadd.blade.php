@extends('layouts.main')
@section('title', 'eduta - form Pelamar')
@section('content')
<div class="card mt-4">
    <div class="card-header"><Strong> Form Data Pelamar</Strong></div>
    <div class="card-body ">
        <form action="/account/save" method="post">
        @csrf
            <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>

            <Label>Gender</Label>
        
        <div class="form-check">
            <input type="radio" name="gender" class="form-check-input" value="pria">
            <label>Pria</label>
        </div>
        <div class="form-check">
            <input type="radio" name="gender" class="form-check-input" value="Wanita">
            <label>Wanita</label>
        </div>

        <label>Tingkat Pendidikan</label>
        <div class="form-group">
            <select name="Tinpend" class="form-control">
                <option value="0">--Pilih Tingkat Pendidikan Terakhir--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
            </select>
        </div>
        
        <label>Bidang Keahlian</label>
        <div class="form-check">
            <input type="checkbox" name="bidkeah[]" class="form-check-input" value="WEB">
            <label>WEB Developer</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="bidkeah[]" class="form-check-input" value="Administrasi">
            <label>Administrasi</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="bidkeah[]" class="form-check-input" value="Data">
            <label>Data Analyst</label>
        </div>

        <div class="form-group">
            <button type=submit role="button" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection