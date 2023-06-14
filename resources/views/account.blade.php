@extends('layouts.main')
@section('title', 'eDuta - Pelamar')
@section('content')
<h1>Pelamar</h1>
<div class="card mt-4">
    <div class="card-header">
        <a href="/account/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square"></i>+ Pelamar</a>
        <a href="/account" class="btn btn-primary" role="button" title="Sort Ascending"><i class="bi bi-sort-numeric-down"></i>
            Ascending</a>
        <a href="/account/desc" class="btn btn-primary" role="button" title="Sort Descending"><i class="bi bi-sort-numeric-up"></i>
            Descending</a>
        <form action="/account/searchbyNik" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search NIK" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <form action="/account/searchbyNama" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search Nama" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Nama</button>
        </form>
    </div>
    <div class="card-body">

        @if(session('insert'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id='alert'>
            <strong>{{session('insert')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <script type="text/javascript">
                setTimeout(function() {

                    // Closing the alert
                    $('#alert').alert('close');
                }, 4000);
            </script>

        </div>
        @elseif(session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id='alert'>
            <strong>{{session('update')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <script type="text/javascript">
                setTimeout(function() {

                    // Closing the alert
                    $('#alert').alert('close');
                }, 4000);
            </script>
        </div>
        @elseif(session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id='alert'>
            <strong>{{session('delete')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <script type="text/javascript">
                setTimeout(function() {

                    // Closing the alert
                    $('#alert').alert('close');
                }, 4000);
            </script>
        </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">tingkat_pendidikan</th>
                    <th scope="col">bidang_keahlian </th>
                    <th scope="col">Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plm as $idx => $p)
                <tr>
                    <th scope="row">{{ $idx + $plm->firstItem() }}</th>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->gender }}</td>
                    <td>{{ $p->tingkat_pendidikan }}</td>
                    <td>{{ $p->bidang_keahlian }}</td>
                    <td>
                        <a href="/account/formedit/{{$p->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="/account/delete/{{$p->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class='float-right'>{{$plm->links()}}</span>
    </div>
</div>
@endsection