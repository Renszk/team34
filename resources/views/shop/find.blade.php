@extends('layouts.app')  <!-- layouts.appを呼び出している -->
@section('style')  <!-- styleを呼び出している -->
@endsection

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color:black;
  /*background-image: url(storage/images/backimg02.jpg);*/
}

input{ 
  height: 40px;
}

h1{
  font-size: 80px;
  font-family: 'Hiragino Kaku Gothic Pro','ヒラギノ角ゴ Pro W3','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
  color: #6cb4e4;
  text-align: center;
  padding: 0.25em;
  border-top: solid 2px #6cb4e4;
  border-bottom: solid 2px #6cb4e4;
  background: -webkit-repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
  background: repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
}

}


</style>



@section('content')
  <h1 class="text-center">商品検索画面</h1>
  @include('layouts.side')
  <div class="container">

    <form action="{{'find'}}" method="post">  <!-- formのactionの中身がhome.bladeとは違うので注意 -->
      @csrf
      <input type="text" name="name" style="width: 30%">
      <input type="submit" value="検索" style="width: 10%">
      <a href="/home" class="btn btn-secondary ml-5">商品一覧ページに戻る</a>
      <h4 class="text-left mt-3">合計{{ $products->count() }}件の検索結果が見つかりました</h4>
    </form>

      <div class="menu-items row text-center">

      <?php foreach ($products as $product): ?>
        <div class="card col-4" style="border: double 5px #4ec4d3;">
          <img src="../{{ $product->picture_path }}" class="menu-item-image img-responsive" style="height:250px;">  <!-- ディレクトリ構造の違いによりimgのパスがhomeと違うので注意 -->
          <div class="card-body">
            <h2 class="menu-item-name" style="background: linear-gradient(transparent 70%, #a7d6ff 70%);">{{ $product->name }}</h2>
          </div>
          <ul class="list-group list-group-flush">
                  <li class="list-group-item price" style="font-size: 24px">¥{{ $product->price}}</li>
                  <li class="list-group-item">
                    <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細をチェック</a>
                  </li>
                </ul>
              </div>
            <?php endforeach ?>
          </div>
          <a href="/home" class="btn btn-outline-secondary btn-lg btn-block mt-3">商品一覧ページに戻る</a>
        </div>

         </body>
<<<<<<< HEAD
    @extends('layouts.side')
    @section('sidebar')
@endsection
@endsection
=======
@section('sidebar')  <!-- その中のsidebarを呼び出す -->
@endsection  <!-- sidebarのendsection -->
@endsection  <!-- contentのendsection -->
>>>>>>> 04aeda02fffb68f36010d7a38f9ef1bd02adfb7b
