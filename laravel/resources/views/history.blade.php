<div class="d-flex justify-content-center">
<table class="table table-sm" style="max-width:1024px">
  <thead>
    <tr>
      <th scope="col" style="width: 20%">日付</th>
      <th scope="col" style="width: 15%">体調</th>
      <th scope="col" style="width: 15%">点数</th>
      <th scope="col" style="width: 35%">メモ</th>
      <th scope="col" style="width: 15%"></th>
    </tr>
  </thead>
  <tbody>
@foreach($histories as $history)

    <tr>
      <td>{{ $history->created_at->format('Y/m/d　H:i') }}</td>
      <td>{{ $history->status }}</td>
      <td>{{ $history->score }}</td>
      <td>{{ $history->memo }}</td>
      <td><button type="button" id="history_delete_{{$history->id}}" class="history_delete btn btn-danger">削除</button></td>
    </tr>

@endforeach
</tbody>
</table>

</div>
<div class="d-flex justify-content-center">{{ $histories->links() }}</div>
<script>
$(".history_delete").click(function(){
  var thisbutton = $(this).attr('id');
      thisbuttonid = thisbutton.split('_')[2];

      $.ajax({
      type: 'GET',
      url: '{{ route('delete') }}',
      dataType: 'text',
      data: {
            'id': thisbuttonid
        },
      success: function(data) { //リクエストが成功した場合の処理
          console.log("ajax 成功");
          window.location.reload();
        },
        error: function(error) { //リクエストが失敗した場合の処理
          console.log(error);
      }
    });
    
});
</script>