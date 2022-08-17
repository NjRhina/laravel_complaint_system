@extends('layouts.app')
@section('title','Create complaint')

@section('content')
<form method="POST" action="/complaints" class="form" >

@csrf

    <div class="mb-4 form-group mt-3">
        <label for="category">Category:</label>
        <br>
        <select name="category" id="category" class="btn dropdown-toggle m-2 form-control">
            <optgroup label="Complaint categories">
                <option class="text-muted">Select complaint category</option>
                <option value="Finance">Finance</option>
                <option value="Education">Education</option>
                <option value="Welfare">Welfare</option>
                <option value="Culture">Culture</option>
            </optgroup>
        </select>
        <br>
        <label for="description">Description:</label>
        <textarea type="text" class="form-control m-2" id="description" name="description"></textarea>

        <button class="btn btn-primary m-1">Create</button>
        <a href="/complaints" class="btn btn-secondary m-1">Cancel</a>

    </div>

</form>
@endsection
