@extends('layout.layout')
@section('title', 'Search')
@section('content')
    <div class="form-wrapper" style="margin: 100px 0px 0px 500px; width:500px; height:auto;">
        <div class="form-group">
            <form action="{{ route('search') }}">
                <input type="text" name="search" class="form-control" required />
        </div>
        <div class="col-md-2">
                <input type="submit" value="Search" class="btn btn-lg btn-primary" />
            </form>
        </div>
    </div>
@endsection()