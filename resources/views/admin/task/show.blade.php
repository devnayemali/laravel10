@extends('admin.layout.layout')
@section('page_title', 'Task Details')

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card shadow mb-4 h-100">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <h4 class="m-0 font-weight-bold text-primary">Task Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $task->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $task->title }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $task->description }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ ($task->status == 1) ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td> {{ date('j F, Y', strtotime($task->created_at)) }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td> {{ ($task->updated_at != $task->created_at) ? date('j F, Y', strtotime($task->updated_at)) : 'Not Updated Yet' }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow mb-4 h-100">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <h4 class="m-0 font-weight-bold text-primary">User Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $task->user?->id }}</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{ $task->user?->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $task->user?->email }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td> {{ date('j F, Y', strtotime($task->user?->created_at)) }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td> {{ ($task->user?->updated_at != $task->user?->created_at) ? date('j F, Y', strtotime($task->user?->updated_at)) : 'Not Updated Yet' }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 mt-4">
            <a class="btn btn-success" href="{{ route('task') }}"><i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>
    

</div>

@endsection