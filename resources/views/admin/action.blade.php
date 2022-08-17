@extends('layouts.app')

@section('content')

<div class="col-md-8 mt-3">
        <form method="POST" action="/admin/{{$complaint->id}}" class="form" >
            @method('PUT')
            @csrf

            <div>
                <h5>Category:  </h5>
                <p name="category" id="category" value="{{$complaint->category}}" >{{$complaint->category}}</p>
            </div>

            <div>
                <h5>Description:  </h5>
                <p name="description" id="description" value="{{$complaint->description}}" >{{$complaint->description}}</p>
            </div>
                                    <!-- not yet implemented-->
                <button class="btn btn-outline-success m-1">Approve</button>
                <button class="btn btn-outline-danger m-1" value="{{$complaint->status == 'rejected'}}">Reject</button>

                <!-- <a href="/admin/index" class="btn btn-outline-dark m-1">Cancel</a> -->
            </div>

        </form>

</div>
    </div>
    @endsection

