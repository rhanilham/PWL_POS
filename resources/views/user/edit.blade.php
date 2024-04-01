@extends ('layouts.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah User</h3>
        </div>
        <form action="/PWL_POS/public/user/{{ $user->user_id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="card-body">
                <div class="form-group">
                    <label for="level_id">Level</label>
                    <select class="form-control @error('level_id') is-invalid @enderror" id="level_id" name="level_id">
                        @foreach($levels as $level)
                            <option value="{{$level->id}}">{{$level->level_nama}}</option>
                        @endforeach
                    </select>
                    @error('level_id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="usernameuser">Username</label>
                    <input type="text" class="form-control" id="usernameuser" name="usernameuser" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="namauser">Nama</label>
                    <input type="text" class="form-control" id="namauser" name="namauser" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="passworduser">Password</label>
                    <input type="password" class="form-control" id="passworduser" name="passworduser" placeholder="Enter password">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/user') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
