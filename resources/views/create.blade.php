@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-warning"><h3><i>ADD ITEM</i></h3></div>
        <div class="card-body bg-secondary text-light">
            <form action="/request" method="POST">
                @csrf
                <div class="form-group">
                    <label for="text">Text</label>
                    <input id="text" class="form-control" type="text" name="text">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <input id="body" class="form-control" type="text" name="body">
                </div>
                <br>
                <button type="submit" class="form-control btn btn-info">Submit</button>
            </form>
        </div>
    </div>

@endsection