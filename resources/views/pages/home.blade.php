@extends('layout.layout')
@section('title', 'Job')
@section('content')
        @include('layout.sessionMessage')
        @if(count($table))
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
                        @foreach($table as $data)
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

                    {{ $table->links() }}
                </table>
            </div>
        @endif
        <div class="col-md-5" style="margin-left:39%;">
            <span class="btn">
                <h4><a class="badge badge-secondary" href="{{ route('postJob') }}">Post a job</a></h4>
            </span>
            <span class="btn">
                <h4><a class="badge badge-primary" href="{{ route('pages.search') }}">Search a job</a></h4>
            </span>
        </div>
@endsection