@extends('layout.layout')
@section('title', 'Search')
@section('content')
    <div class="form-wrapper" style="margin: 100px 0px 0px 500px; width:500px; height:auto;">
        
            <form method="POST" action="{{ route('search') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="search" class="form-control" required />
                </div>
                 <div class="col-md-2">
                    <input type="submit" value="Search" class="btn btn-lg btn-primary" />
                </div>
            </form>
    </div>
    @if(isset($results))
        <div class="table-wrapper">
                <h2><center>Jobs for you</center></h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Job title</th>
                            <th>Job Details</th>
                            <th>Skills</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>
                                Edit
                                Delete
                            </th>
                        </tr>
                    </thead> 
                    <tbody>
                        @php($id = 1)
                        @foreach($results as $data)
                            <tr>
                                <td>{{ $data->jTitle }}</td>
                                <td>{{ str_limit($data->jDetails, 50) }}</td>
                                <td>{{ $data->skillSet }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form method="POST" action="{{ route('job.valAuth', ['id' => $data->id]) }}">
                                            {{ csrf_field() }}
                                            <button class="btn btn-success" name="edit" value="edit"><i class="fa fa-trash">Edit</i></button>
                                            <button class="btn btn-danger" name="delete" value="delete"><i class="fa fa-trash">Delete</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    @endif
@endsection()