@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
@include('record')
<div id="app">
</div>
@include('chart')
@include('history')
@include('csv')
@endsection