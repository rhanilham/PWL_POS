@extends("layouts.app")

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Create')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat level baru</h3>
        </div>
        <form method="post" action="../level">
            <div class="card-body">
                <div class="form-group">
                @csrf
                    <label for="codelevel">Kode Level</label>
                    <input type="text" class="form-control" id="codelevel" name="codelevel" placeholder="Enter kode level">
                </div>
                <div class="form-group">
                    <label for="namalevel">Nama Level</label>
                    <input type="text" class="form-control" id="namalevel" name="namalevel" placeholder="Enter nama level">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/level/') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
