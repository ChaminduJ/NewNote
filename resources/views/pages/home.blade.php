@extends('layouts.main')

@section('title')
    New Note-Home
@endsection
@section('head')

@endsection

@section('pg-content')
    <div class="add-new">
        <button class="btn btn-outline-success my-2 my-sm-0" type="button"> <a href="{{ route('new-note') }}"> Add New</a></button>
    </div>
    <br>
    @if(session()->has('success-new-note'))
        <div class="alert alert-success">
            <span>{{ session()->get('success-new-note') }}</span>
        </div>
    @endif
    @if(session()->has('success-delete-note'))
        <div class="alert alert-success">
            <span>{{ session()->get('success-delete-note') }}</span>
        </div>
    @endif
    <br>
    <section class="note">
        <div class="row mx-auto">
            @foreach ($newnotes as $newnote )
                <div class="col-lg-3 col-md-6 col-sm-8 col-xs-10">
                    <div class="col-12">
                        <div class="header title">
                            <h1>{{ $newnote->title }}</h1>
                        </div>
                        <div class="body">
                            <p>{{ $newnote->note }}</p>
                            <p>{{ $newnote->created_at }}</p>
                        </div>
                        <div class="footer mx-auto">
                            <form action="{{ route('note-delete',$newnote->id) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete Note </button>
                                <button type="button" class="btn btn-outline-warning"><a href="{{ route('edit-note',$newnote->id)  }}">Edit Note</a> </button>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
                @endforeach
            </div>
        <br>
        <br>
    </section>
    @endsection
    