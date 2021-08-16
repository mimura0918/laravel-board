<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>APEX掲示板</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">APEX掲示板</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </div>
  </div>
</nav>

<div class="container mt-5 mb-5 card" style="width: 50rem;">
    <div class="mt-3">
    <div class="row justify-content-center">
        <div class="form-check form-check-inline">
            機種：
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">PC</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">PS4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Switch</label>
        </div>

        <div class="pr-2">
        目的：
        <select class="form-select" aria-label="Default select example">
            <option value="1">カジュアル</option>
            <option value="2">ランク</option>
            <option value="3">訓練場</option>
        </select>
        </div>

        <div class="form-check-inline">
        ID：
            <div>
            <input class="form-control form-control-sm" id="ex1" type="text" placeholder="入力してください" aria-label="default input example">
            </div>
        </div>

        <div>
            募集人数：
                <select class="form-select" aria-label="Default select example">
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                </select>
            </div>
    </div>
    </div>

    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="">
            募集キャラクター：
                <select class="form-select" aria-label="Default select example">
                    <option value="1">特になし</option>
                    <option value="2">ブラッドハウンド</option>
                    <option value="3">ジブラルタル</option>
                    <option value="4">ライフライン</option>
                    <option value="5">パスファインダー</option>
                    <option value="6">レイス</option>
                    <option value="7">バンガロール</option>
                    <option value="8">コースティック</option>
                    <option value="9">ミラージュ</option>
                    <option value="10">オクタン</option>
                    <option value="11">ワットソン</option>
                    <option value="12">クリプト</option>
                    <option value="13">レヴナント</option>
                    <option value="14">ローバ</option>
                    <option value="15">ランパート</option>
                    <option value="16">ホライゾン</option>
                    <option value="17">ヒューズ</option>
                    <option value="18">ヴァルキリー</option>
                </select>
            </div>

            <div class="mx-2">
            募集ランク：
                <select class="form-select" aria-label="Default select example">
                    <option value="1">特になし</option>
                    <option value="2">ブロンズ</option>
                    <option value="3">シルバー</option>
                    <option value="4">ゴールド</option>
                    <option value="5">プラチナ</option>
                    <option value="6">ダイヤ</option>
                    <option value="7">マスター</option>
                    <option value="8">プレデター</option>
                </select>
            </div>

            <div>
            募集レベル：
                <select class="form-select" aria-label="Default select example">
                    <option value="1">特になし</option>
                    <option value="2">100以上</option>
                    <option value="3">200以上</option>
                    <option value="4">300以上</option>
                    <option value="5">400以上</option>
                    <option value="6">500</option>
                </select>
            </div>
        </div>
    </div>

<div class="container mt-1">
    {{-- <div class="row">
        一言：
        <div class="form-inline">
            <input class="form-control form-control-sm" type="text" placeholder="入力自由" aria-label=".form-control-sm example">
        </div>
    </div> --}}

    <div class="form-group row justify-content-center">
        一言：
        <div class="col-sm-7">
          <input type="text" id="text3a" class="form-control form-control-sm">
        </div>
        <button type="button" class="btn btn-outline-info btn-sm">送信</button>
    </div>
</div>
</div>


<div class="container mt-3 py-3 card" style="width: 40rem;">
      <h4>機種 目的</h4>
      <div class="row ml-2">
        <p class="m-0">ID：</p>
        <p class="m-0">人数：</p>
      </div>
      <div class="row ml-2">
        <p class="m-0">募集キャラクター：</p>
        <p class="m-0">募集ランク：</p>
        <p class="m-0">募集レベル：</p>
      </div>
      <div class="row ml-2">
        <p class="m-0">一言：</p>
      </div>
</div>

<div class="container mt-3 py-3 card" style="width: 40rem;">
    <h4>機種 目的</h4>
    <div class="row ml-2">
      <p class="m-0">ID：</p>
      <p class="m-0">人数：</p>
    </div>
    <div class="row ml-2">
      <p class="m-0">募集キャラクター：</p>
      <p class="m-0">募集ランク：</p>
      <p class="m-0">募集レベル：</p>
    </div>
    <div class="row ml-2">
      <p class="m-0">一言：</p>
    </div>
</div>



    <footer class="footer bg-dark  fixed-bottom">
    <div class="container text-center">
    <span class="text-light">APEX掲示板</span>
    </footer>
</body>
</html>
