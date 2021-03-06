@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'Edit User')

<!-- ページの見出しを入力 -->
@section('content_header')
    <h1>Edit User</h1>
@stop

<!-- ページの内容を入力 -->
@section('content')
    <p>Edit User.</p>

    <form action="/update_user" method="POST">
                        @csrf
                        @method('POST')
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                            <th class="text-nowrap">ユーザ</th>
                            <th class="text-nowrap">役割</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td><input type="text" value="<?php echo $edit_user['name'] ?>" name="name" class="form-control" style="width:300px;" /></td>
                            <td><input type="text" value="<?php echo $edit_user['role'] ?>" name="role" class="form-control" style="width:300px;" /></td>
                        </tbody>
                        </table>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $edit_user['id'] ?>">
                        <input type="submit" value="更新" class="btn btn-success">
    </form>
    <form action="/remove_user" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="id" value="<?php echo $edit_user['id'] ?>">
                        <input type="submit" value="削除" class="btn btn-danger" onClick="delete_alert(event);return false;">
    </form>
@stop

<!-- 読み込ませるCSSを入力 -->
@section('css')
    <link rel="stylesheet" href="/css/make.css">
@stop

<!-- 読み込ませるJSを入力 -->
@section('js')
    <script src="js/alert.js"></script>
@stop
