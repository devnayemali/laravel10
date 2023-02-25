{!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
{!! Form::text('title', null , ['class' => 'form-control mb-3', 'placeholder' => 'Enter Your Title']) !!}

{!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
{!! Form::textarea('description', null , ['class' => 'form-control mb-3', 'placeholder' => 'Enter Your Description'] ) !!}

{!! Form::label('status', 'Status', ['class' => 'form-label']) !!}
{!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null, ['class' => 'form-control mb-3', 'placeholder' => 'Select Status']); !!}

{!! Form::label('user_id', 'Select User', ['class' => 'form-label']) !!}
{!! Form::select('user_id', $users, null, ['class' => 'form-control mb-3', 'placeholder' => 'Select User']); !!}