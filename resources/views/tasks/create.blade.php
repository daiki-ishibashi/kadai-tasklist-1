@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>タモリ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タモリ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
