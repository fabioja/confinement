@extends('templates.master')

@section('css-view')

@endsection


@section('conteudo-view')
    {!! Form::open(['method'=>'post', 'class'=>'form-padrao']) !!}
        @include('templates.forms.input', ['input'=>'cpf', 'attributes'=>['placeholde']])
    {!! Form::close() !!}
@endsection


@section('js-view')

@endsection