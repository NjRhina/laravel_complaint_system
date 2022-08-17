@extends('layouts.app')
@section('content')
<!-- <a href='/complaints/create' class="btn btn-outline-dark btn-md mb-3 mt-0 mr-3 ml-3 w-100">New complaint</a> -->

<h5 class="my-4 text-muted">You have {{$complaints->count()}} complaints </h5>

@if ($complaints->count() > 0)
@foreach($complaints as $complaint)

<div class = "card m-3">
    <!-- <p>{{$complaint->user_name}}</p> -->
    <div class="card-body text-center">
        <h6 class="card-title text-uppercase">{{$complaint->category}} </h6>
        <hr>
        <p class="card-text">{{$complaint->description}} </p>
        <a href="/complaints/{{ $complaint->id }}/edit" class="btn btn-outline-primary mb-2" style="text-decoration:none;">Edit</a>
    </div>
    <div class="card-footer text-muted"> {{$complaint->updated_at->diffForHumans()}} </div>
</div>
@endforeach
@endif

@endsection
