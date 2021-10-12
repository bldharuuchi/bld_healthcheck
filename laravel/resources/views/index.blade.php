@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
@include('record')
<div class="d-flex justify-content-center">
<table class="table table-sm" style="max-width:1024px">
  <thead>
    <tr>
      <th scope="col" style="width: 20%">日付</th>
      <th scope="col" style="width: 20%">体調</th>
      <th scope="col" style="width: 20%">点数</th>
      <th scope="col" style="width: 40%">メモ</th>
    </tr>
  </thead>
  <tbody>
@foreach($histories as $history)

    <tr>
      <td>{{ $history->created_at->format('Y/m/d　H:i') }}</td>
      <td>{{ $history->status }}</td>
      <td>{{ $history->score }}</td>
      <td>{{ $history->memo }}</td>
    </tr>

@endforeach
</tbody>
</table>

</div>
<div class="d-flex justify-content-center">{{ $histories->links() }}</div>

@endsection