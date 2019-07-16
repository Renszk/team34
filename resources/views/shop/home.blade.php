@extends('layouts.app')
@section('title')
@endsection
@section('content')

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color:black;
  /*background-image: url(../storage/images/backimage03.jpg);*/
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


</style>
@section('category')


  <h1 class="text-center">商品一覧画面</h1>
  <div class="container">

    <form action="{{ 'product/find' }}" method="post">
      @csrf

      <input type="text" name="name" placeholder="商品名で検索してください" style="width: 30%" >

      <input type="submit" value="検索" style="width: 10%">

    </form>
      <div class="menu-items row text-center">

      <?php foreach ($products as $product): ?>
        <div class="card col-2.99 m-3" style="border: double 5px #4ec4d3;">
          <img src="storage/{{ $product->picture_path }}" class="menu-item-image img-responsive" style="height:250px">
          <div class="card-body">
            <h2 class="menu-item-name" style="background: linear-gradient(transparent 70%, #a7d6ff 70%);
}">{{ $product->name }}</h2>
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
        </div>

@endsection
@section('style')
@endsection


@section('footer')
@endsection