@extends('admin.layout.layout')
@section('page_title', 'Edit Task')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card shadow mb-4 pb-2">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <h6 class="m-0 font-weight-bold text-primary">Add Task</h6>
                        </div>
                        <div class="col-xl-6">
                            <div class="text-right">
                                <a class="btn btn-primary" href="{{ route('task') }}">View Task</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'put']) !!}

                    @include('admin.task.form')

                    {!! Form::button('<i class="fas fa-edit"></i> Update', ['class' => 'btn btn-success mt-1', 'type' => 'submit']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection