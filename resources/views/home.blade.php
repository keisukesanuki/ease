@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'Welcome!!')

<!-- ページの見出しを入力 -->
@section('content_header')
    <h1>Welcome!!</h1>
@stop

<!-- ページの内容を入力 -->
@section('content')
    <p>←「Make Playbook」でplaybookを作成してね</p>
@stop

<!-- 読み込ませるCSSを入力 -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!-- 読み込ませるJSを入力 -->
@section('js')
    <script> console.log('Hi!'); </script>
@stop
