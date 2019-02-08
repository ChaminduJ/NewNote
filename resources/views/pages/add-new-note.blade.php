@extends('layouts.main')

@section('title')
    New Note-Home
@endsection
@section('head')

@endsection

@section('pg-content')
    <div class="add-new">
        <button class="btn btn-outline-success my-2 my-sm-0" type="button"><a href="{{ route('home') }}"><i class="fas fa-arrow-left"></i> Back </a></button>
    </div>
    <br>
    <section class="note">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <div class="col-12">
                    <form method="POST" action="{{ route('new-note-submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                            @if($errors->has('title'))
                            <div class="alert alert-danger">
                                <span>{{ $errors->first('title') }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" rows="3" name="description" id="description" placeholder="Description"></textarea>
                            @if($errors->has('description'))
                            <div class="alert alert-danger">
                                <span>{{ $errors->first('description') }}</span>
                            </div>
                            @endif
                        </div>
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>        
    </section>
@endsection
