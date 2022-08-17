@extends('layouts.app')
@section('title','Edit')

@section('content')
    <div class="col-md-8 mt-3">
        <form method="POST" action="/complaints/{{$complaint->id}}" class="form" >
            @method('PUT')
            @csrf

            <label for="category">Category:</label>
            <br>
    <select name="category" id="category" class="btn  dropdown-toggle m-2 form-control">
        <optgroup label="Complaint categories">
            <option value="{{$complaint->category}}" class="dropdown-item">{{$complaint->category}}</option>
            <option value="Finance" class="dropdown-item">Finance</option>
            <option value="Education" class="dropdown-item">Education</option>
            <option value="Welfare" class="dropdown-item">Welfare</option>
            <option value="Culture" class="dropdown-item">Culture</option>
        </optgroup>
    </select>
    <br>
            <div class="mb-4 form-group">
    <!-- <input type="text" class="form-control m-2" id="category" name="category" value ="{{$complaint->category}}"> -->

                <label for="description">Description:</label>
                <textarea type="text" class="form-control m-2" id="description" name="description" value ="">{{$complaint->description}}</textarea>

                <button class="btn btn-outline-primary m-1">Update</button>
                <a href="/complaints" class="btn btn-outline-dark m-1">Cancel</a>

            </div>

            <form action="/complaints/{{$complaint->id}}">
                @csrf
                @method('DELETE')

                <button class="btn btn-outline-danger">Delete</button>
            </form>
        </form>

    </div>
    </div>

    @endsection

