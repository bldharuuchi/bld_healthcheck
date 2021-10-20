@extends('app')

@section('title', '記事一覧')

@section('content')

@include('nav')
@include('record')

@include('chart')
@include('history')
@include('csv')

@endsection