@extends('layout.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Delete')

@section('content')
    <div class="container">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Delete Level</h3>
            </div>

            <div class="card-body">
                <p>Apakah Anda yakin ingin menghapus level ini?</p>
            </div>

            <div class="card-footer">
                <form method="POST" action="{{ route('level.destroy', $level->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ url('/level') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection