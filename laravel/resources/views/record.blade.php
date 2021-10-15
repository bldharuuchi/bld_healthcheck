<div class="container" style="margin-bottom: 30px;">
    <div class="selection-group d-flex justify-content-center mb-5 mt-5">
    <form method="POST" action="{{ route('record') }}">
      @csrf
      <input id="a" type="radio" name="status" value="(^^)" style="display: none;" checked>
      <label for="a">
        <img class="fine_img" src="imgs/ei-grinning_face.png" style="width: 100px;">
      </label>
      <input id="b" type="radio" name="status" value="('_')" style="display: none;">
      <label for="b">
        <img class="flat_img"src="imgs/ei-frowning_face.png" style="width: 100px;">
      </label>
      <input id="c" type="radio" name="status" value="(-_-;)" style="display: none;">
      <label for="c">
        <img class="bad_img" src="imgs/ei-crying_face.png" style="width: 100px;">
      </label>
    </div>
    <div class="d-flex justify-content-center">
      <label>点数：<input type="text" name="score" class="" style="width: 480px;" placeholder="0~100の半角数字 (必須)" require></label>
    </div>
    <div class="d-flex justify-content-center mb-3">
      <label>メモ：<input type="textarea" name="memo" class="" style="width: 480px;" placeholder="140字以下"></label>
    </div>
    <div class="d-flex justify-content-center">
        
    <button type="submit" class="btn btn-success">登録</button>
    </form>
    </div>
  </div>