@extends('layouts.helloapp')

@section('title', 'index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力して下さい。</p>
    @endif
    <table>
    <form action="/hello" method="post">
        @csrf
        @if ($errors->has('msg'))
            <tr><th>ERROR</th>
            <td>{{$errors->first('msg')}}</td></tr>
        @endif
        <tr><th>Massege: </th><td><input type="text" name="msg"
            value="{{old('msg')}}"></td></tr>

        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
