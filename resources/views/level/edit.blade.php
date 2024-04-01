@extends ('layouts.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Level</h3>
        </div>
        <form action="/PWL_POS/public/level/{{ $level->level_id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="card-body">
                <div class="form-group">
                    <label for="codelevel">Kode KLevel</label>
                    <input type="text" class="form-control" id="codelevel" name="codelevel" placeholder="Masukkan Kode level" value="{{ $level->level_kode }}">
                </div>
                <div class="form-group">
                    <label for="namalevel">Nama Level</label>
                    <input type="text" class="form-control" id="namalevel" name="namalevel" placeholder="Masukkan Nama level" value="{{ $level->level_nama }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{ url('/level/') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
