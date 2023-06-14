@php
 try {
 if(DB::connection()->getPdo()) {
 echo "Berhasil terkoneksi ke basis data <b>".DB::connection()->getDatabaseName()."</b>";
 }
 } catch(Exception $e) {
 echo "Gagal Terkoneksi". $e;
 }
@endphp