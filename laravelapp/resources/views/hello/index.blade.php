@extends('layouts.helloapp')

@section('title', 'index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.com</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
