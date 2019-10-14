@extends('layouts.master')

@section('content')

{!! Form::open(['url'=>'admin/form-submit']) !!}
{{-- {!! Form::open(['action'=>'AdminConroller@formSubmit', 'id'=>'contact_form', 'class'=>'test']) !!}
{!! Form::open(['route'=>'f.submit']) !!}
 --}}

{!! Form::text('your_name', null, ['class' => 'form-control', 'placeholder' => 'Your Full Name']) !!}
{!! Form::hidden('form_type', 'request') !!}
{!! Form::submit('Submit', ['class' => 'btn cw-glb-btn']) !!}
{!! Form::close() !!}

@stop
