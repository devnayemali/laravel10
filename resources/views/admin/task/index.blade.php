@extends('admin.layout.layout')
@section('page_title', 'Task List')

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <h6 class="m-0 font-weight-bold text-primary">Task List</h6>
                </div>
                <div class="col-xl-6">
                    <div class="text-right">
                        <a class="btn btn-info" href="{{ route('task.create') }}">Add Task</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Create By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Create By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ Str::substr($task->title, 0, 20) }}</td>
                            <td>{{ Str::substr($task->description, 0, 40) }}</td>
                            <td> {!! ($task->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-warning">Inactive</span>' !!} </td>
                            <td> {{ $task->user?->name }} </td>
                            <td> {{ date('j F, Y', strtotime($task->created_at)) }} </td>
                            <td> {!! ($task->created_at != $task->updated_at) ? date('j F, Y', strtotime($task->updated_at)) : '<span class="text-warning">Not Updated Yet</span>' !!} </td>
                            <td><a href="{{ route('task.show', $task->id) }}" class="text-info"><i class="fas fa-eye"></i></a> || <a href="{{ route('task.edit', $task->id) }}" class="text-warning"><i class="fas fa-edit"></i></a> || <a href="#" class="text-danger"><i class="fas fa-trash"></i></a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection