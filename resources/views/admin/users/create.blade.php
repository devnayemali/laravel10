@extends('admin.layout.layout')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card shadow mb-4 pb-2">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                        </div>
                        <div class="col-xl-6">
                            <div class="text-right">
                                <a class="btn btn-primary" href="{{ route('admin.users') }}">View All Users</a>
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

                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" name="submit" value="adduser" class="btn btn-primary">Add User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection