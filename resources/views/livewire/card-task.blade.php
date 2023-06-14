<div>

    <div class="card border-info">
        <div class="card-header bg-info text-light justify-content-center d-flex">
            <Strong>Task Terbaru</Strong>
        </div>
        @foreach ($tsk as $t)
        <div class="card-body">
            <hr>
            <h3 class="card-title">{{$t->judul_task}}</h3>
            <p class="card-text"><strong>{{ $t->nama }}</strong></p>
            <p class="card-text">{{$t->deskripsi_task}}</p>
        </div>
        @endforeach
    </div>

</div>
