@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-info"><h3><i>EDIT ITEM N0: {{ $item->id }}</i></h3></div>
    <div class="card-body bg-secondary text-light">
        <form action="/request/{{ $item->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="text">Text</label>
                <input id="text" class="form-control" type="text" name="text" value="{{ $item->text }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <input id="body" class="form-control" type="text" name="body" value="{{ $item->body }}">
            </div>
            <br>
            <button type="submit" class="form-control btn btn-info">Submit</button>
        </form>
    </div>
</div>
@endsection