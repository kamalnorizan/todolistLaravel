@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($tasks as $key=>$task)
                        {{$key+1}}. {{$task->title}}  || @if(!$task->task_details->isempty()){{$task->task_details->first()->task_detail_id}} @endif<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
