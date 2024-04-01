@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="level_id">Level id</label>
                        <input type="text" id="level_id" name="level_id" class="form-control" placeholder="Enter Level ID">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
@stop

@section('css')
    {{-- Add extra stylesheets here --}}
@stop

@section('js')
    {{-- Add extra JavaScript here --}}
@stop
