@extends('layouts.app')
@section('title','Complaints')
@section('content')

@foreach($complaints as $complaint)
<!-- pending complaints -->
@if ($complaint->status=='pending')
<div class = "card m-3 bg-light">
    <div class="card-body text-center">
        <h6 class="card-title text-uppercase">{{$complaint->category}} </h6>
        <hr>
        <p class="card-text">{{$complaint->description}} </p>
        <a href="/admin/complaints/{{ $complaint->id }}/action" class="btn btn-outline-primary mb-2" style="text-decoration:none;">Action</a>
    </div>
    <div class="card-footer text-muted">
        {{$complaint->updated_at->diffForHumans()}}
    <p>By {{$complaint->user->name}}</p>
    </div>
</div>
@endif

<!-- approved complaints -->
@if ($complaint->status=='approved')
<div class = "card m-3 bg-success">
    <div class="card-body text-center ">
        <h6 class="card-title text-uppercase">{{$complaint->category}} </h6>
        <hr>
        <p class="card-text">{{$complaint->description}} </p>
        <button class="btn btn-success">Approved</button>
        <!-- <a href="/admin/complaints/{{ $complaint->id }}/action" class="btn btn-outline-primary mb-2" style="text-decoration:none;">Action</a> -->
    </div>
    <div class="card-footer text-muted">
        <!-- {{$complaint->updated_at->diffForHumans()}} -->
    <!-- <p>By {{$complaint->user->name}}</p> -->
    </div>
</div>
@endif

<!-- rejected complaints -->
@if ($complaint->status=='rejected')
<div class = "card m-3 bg-danger">
    <div class="card-body text-center ">
        <h6 class="card-title text-uppercase">{{$complaint->category}} </h6>
        <hr>
        <p class="card-text">{{$complaint->description}} </p>
        <button class="btn btn-danger">Rejected</button>
        <!-- <a href="/admin/complaints/{{ $complaint->id }}/action" class="btn btn-outline-primary mb-2" style="text-decoration:none;">Action</a> -->
    </div>
    <div class="card-footer text-muted">
        <!-- {{$complaint->updated_at->diffForHumans()}} -->
    <!-- <p>By {{$complaint->user->name}}</p> -->
    </div>
</div>
@endif

@endforeach
@endsection

