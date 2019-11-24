@extends('layouts/admin_base')
@section('content')

<div class="create-form-wrapper">
    {{ Form::open(['route' => 'admin.store.confirm', 'method' => 'post']) }}
        {!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {{ Form::close()}}

</div>

@endsection