@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post" action="/task">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input id="due_date" class="form-control" type="date" name="due_date">
                        </div>
                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
