@extends('layouts.helloapp')

@section('title', 'Add')

@section('menuber')
    @parent
    新規ページ
@endsection

@section('content')

    <form action="/hello/add" method="post">
    <table>
       @csrf
       <tr><th>name: </th><td><input type="text" name="name"></td></tr>
       <tr><th>メール: </th><td><input type="text" name="mail"></td></tr>
       <tr><th>年齢　: </th><td><input type="text" name="age"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
