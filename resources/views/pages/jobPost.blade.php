@extends('layout.layout')
@section('title', 'Post a job')
@section('content')
        <div class="col-md-12" style="margin:200px 0px 0px 600px;">
            <fieldset style="width:500px; height:auto;">
                <div class="form-wrapper">
                    <form name="jobPost" method="POST" action="{{ route('jobDesc') }}">
                        {{ csrf_field() }}
                        <h1 style="text-align:center;">Job portal</h1>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input class="form-control" autofocus id="email" type="email" name="email" required  />
                            </div>
                            <div class="form-group">
                                <label for="jTitle">Job title:</label>
                                <input class="form-control" id="jTitle" type="text" name="jTitle" required  />
                            </div>
                            <div class="form-group">
                                <label for="jDetails">Job details:</label>
                                <textarea class="form-control" type="text" name="jDetails" id="jDetails" cols="20" rows=5 required ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="skillSet">Skill set:</label>
                                <input class="form-control" type="text" name="skillSet" value="" size=45  />
                            </div>     
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <input class="btn btn-success" type="submit" name="post" value="POST" />
                                </div>
                                
                            </div>
                    </form>
                </div>
            </fieldset>
        <div>
@endsection