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

                    {!! Form::open() !!}

                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control mb-3', 'placeholder' => 'Enter Your Title']) !!}

                    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                    {!! Form::textarea('description', null , ['class' => 'form-control mb-3', 'placeholder' => 'Enter Your Description'] ) !!}

                    {!! Form::label('status', 'Status', ['class' => 'form-label']) !!}
                    {!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null, ['class' => 'form-control mb-3', 'placeholder' => 'Your Satus']); !!}

                    {!! Form::label('user_id', 'Select User', ['class' => 'form-label']) !!}
                    {!! Form::select('user_id', $users, null, ['class' => 'form-control mb-3', 'placeholder' => 'User Name']); !!}

                    {!! Form::close() !!}

                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Title</label>
                          <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" rows="10" cols="20" name="description" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Select Status</label>
                          <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Select User</label>
                          <select class="form-control" name="user_id">
                            @foreach ($users as $id => $user)
                                <option value="{{ $id }}">{{ $user }}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add New Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection