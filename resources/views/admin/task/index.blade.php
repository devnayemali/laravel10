@extends('admin.layout.layout')


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
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ Str::substr($task->description, 0, 60) }}</td>
                            <td> @if ($task->status == 1) Active @else InActive @endif </td>
                            <td> {{ $task->user_id }} </td>
                            <td> {{ date('j F, Y', strtotime($task->created_at)) }} </td>
                            <td> {{ date('j F, Y', strtotime($task->updated_at)) }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection