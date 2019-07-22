<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Seederにデータ入れる際の注意点
        // 'name'は長くし過ぎない
        // ’description’は実際のサイトを参考にして実際にありそうな詳細説明をつける
        // 'category'はすでに決められた10個から選び入れる
        // 'price'は型がIntなので整数で入れて""をつけてはいけない
        // 'picture_path''created_at''updated_at'は書き方を真似する

      \DB::table('products')->insert([
        [
            'name'    => '男性用Tシャツ',
            'description' => "さりげなさがかわいい、ワンポイントTシャツはこの夏の定番。",
            'category' => "mensTシャツ",
            'price' => 3500,
            'picture_path' => "images/products/mtshirt01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
         [
            'name'    => '男性用Tシャツ',
            'description' => "シルエットやロゴで周りと差がつく白Tシャツ",
            'category' => "mensTシャツ",
            'price' => 3500,
            'picture_path' => "images/products/mtshirt02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用Tシャツ',
            'description' => "鍛え上げたボデェーを強調してくれる一枚。",
            'category' => "mensTシャツ",
            'price' => 3500,
            'picture_path' => "images/products/mtshirt03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用Tシャツ',
            'description' => "着心地抜群のシルク素材。真夏の夜もこれ一枚で快適。",
            'category' => "mensTシャツ",
            'price' => 3500,
            'picture_path' => "images/products/mtshirt04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用Tシャツ',
            'description' => "迷彩が可愛い☆ミリタリーTシャツ",
            'category' => "mensTシャツ",
            'price' => 3500,
            'picture_path' => "images/products/mtshirt05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/products/shirt01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/products/shirt02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/products/shirt03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/products/shirt04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用スーツ',
            'description' => "心地よい肌触りの生地と軽さを兼ね備えた大人気スーツ。暑い夏にも外で着やすい当店の人気アイテム。",
            'category' => "ジャケット",
            'price' => 15000,
            'picture_path' => "images/products/jacket01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ジャケット',
            'description' => "心地よい肌触りの生地と軽さを兼ね備えた爽やかジャケット。様々なインナーと合わせて可能性無限大。",
            'category' => "ジャケット",
            'price' => 6500,
            'picture_path' => "images/products/jacket02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用スーツ',
            'description' => "肌触りの良い生地と軽さを兼ね備えたドライスーツ。蒸し暑い夏にも外で着やすい当店の大人気スーツ。",
            'category' => "ジャケット",
            'price' => 13000,
            'picture_path' => "images/products/jacket03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ジャケット',
            'description' => 
            "心地よい肌触りの生地のカジュアルな色の爽やかジャケット。様々なインナーと組み合わせて可能性無限大。",
            'category' => "ジャケット",
            'price' => 5500,
            'picture_path' => "images/products/jacket04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けタイトなタイプのジーンズ。トップスとの組み合わせ次第で可能性無限大。",
            'category' => "ジーンズ",
            'price' => 4500,
            'picture_path' => "images/products/jeans01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けスキニータイプのジーンズ。模様が特徴的なジーンズでファッションの幅を広げよう。",
            'category' => "ジーンズ",
            'price' => 4000,
            'picture_path' => "images/products/jeans02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けスキニータイプのジーンズ。トップスとの組み合わせ次第で可能性無限大。",
            'category' => "ジーンズ",
            'price' => 5500,
            'picture_path' => "images/products/jeans03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けスキニータイプのジーンズ。模様が特徴的なジーンズでファッションの幅を広げよう。",
            'category' => "ジーンズ",
            'price' => 4800,
            'picture_path' => "images/products/jeans04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けスキニータイプのジーンズ。シンプルなデザインのジーンズをうまく使ってファッションの可能性を広げよう。",
            'category' => "ジーンズ",
            'price' => 4200,
            'picture_path' => "images/products/jeans05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ジーンズ',
            'description' => "女性向けスキニータイプのジーンズ。周りへの美脚アピールにはもってこいのタイトジーンズ。",
            'category' => "ジーンズ",
            'price' => 5200,
            'picture_path' => "images/products/jeans06.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "デニムと合わせたいシンプルTシャツ",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt0.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "女性向けデザインTシャツ。サングラスやバッグとの組み合わせ次第で組み合わせ無限大。",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "個性派のあなたに来こなして欲しい一枚。",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "ビッグシルエットが可愛いTシャツ。パステルカラーがスポーティになりすぎない",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "クロップド丈のロゴTシャツ。チラ見せが可愛い",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "長めの袖と淡いピンクがいい女度を高めてくれる",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "ゆったりシルエットが気張らないTシャツ",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt06.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用Tシャツ',
            'description' => "細めのボーダーが今っぽいクロップド丈Tシャツ",
            'category' => "ladysTシャツ",
            'price' => 1700,
            'picture_path' => "images/products/wtshirt07.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "上品なシルエットのベージュニット。ウール100%",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "近年流行のUネックニット。上品にもカジュアルにも合わせやすい。",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "モコモコ素材のモテニット。今年はサンライトイエローでみんなの視線を浴びちゃおう⭐︎",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "ワインレッドのタートルネックで大人の女性らしさを。",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "ブラウンのボーダーがレベちのかわいさ。",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "バラの刺繍が目を引く大胆なデザイン",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit06.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用ニット',
            'description' => "女性向けボーダー柄ニット。暖かさとデザイン性を兼ね備えた大人気ニット。",
            'category' => "ニット",
            'price' => 3500,
            'picture_path' => "images/products/knit07.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用スカート',
            'description' => "女性向け紫色スカート。この夏のトレンドカラー紫をふんだんに取り入れたスカート。",
            'category' => "スカート",
            'price' => 2900,
            'picture_path' => "images/products/skirt01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用スカート',
            'description' => "女性向け紫色スカート。この夏のトレンドカラー紫をふんだんに取り入れたスカート。",
            'category' => "スカート",
            'price' => 2900,
            'picture_path' => "images/products/skirt02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用スカート',
            'description' => "女性向け紫色スカート。この夏のトレンドカラー紫をふんだんに取り入れたスカート。",
            'category' => "スカート",
            'price' => 2900,
            'picture_path' => "images/products/skirt03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用スカート',
            'description' => "女性向け紫色スカート。この夏のトレンドカラー紫をふんだんに取り入れたスカート。",
            'category' => "スカート",
            'price' => 2900,
            'picture_path' => "images/products/skirt04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '女性用スカート',
            'description' => "女性向け紫色スカート。この夏のトレンドカラー紫をふんだんに取り入れたスカート。",
            'category' => "スカート",
            'price' => 2900,
            'picture_path' => "images/products/skirt05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        
        [
            'name'    => '男性用ズボン',
            'description' => "男性向けグレー色ズボン。カジュアルな場面でも使える多用途ズボン",
            'category' => "ズボン",
            'price' => 5100,
            'picture_path' => "images/products/pants01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ジーンズ',
            'description' => "男性向けジーンズ。渋めのカラーを生かしたファッションにもってこい。",
            'category' => "ズボン",
            'price' => 4700,
            'picture_path' => "images/products/pants02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ズボン',
            'description' => "男性向けクリーム色ズボン。明るいカラーを用いたズボンで印象アップを狙おう！",
            'category' => "ズボン",
            'price' => 3200,
            'picture_path' => "images/products/pants03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ジーンズ',
            'description' => "男性向けジーンズ。渋めのカラーを生かしたファッションにもってこい。",
            'category' => "ズボン",
            'price' => 5900,
            'picture_path' => "images/products/pants04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ズボン',
            'description' => "男性向け黒色ズボン。ダメージが入ったデザインを生かしてオシャレなコーディネートをしよう！。",
            'category' => "ズボン",
            'price' => 3900,
            'picture_path' => "images/products/pants05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用ジーンズ',
            'description' => "男性向けジーンズ。タイトなタイプなジーンズを生かしたコーディネートをしてみよう！",
            'category' => "ズボン",
            'price' => 6100,
            'picture_path' => "images/products/pants06.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "緑が鮮やかなワンピース。これ一枚で急なお呼ばれにも困らない？",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "パンツだから可愛くなりすぎない♪",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "シックなブラックで大人っぽく",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "さりげない花柄が女性らしさを際立たせる一枚",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "腰元のリボンでスタイルUP！",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece05.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'ワンピース',
            'description' => "高見えシルエットで主役級の一枚。",
            'category' => "ワンピース",
            'price' => 6100,
            'picture_path' => "images/products/onepiece06.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'セーター',
            'description' => "お父さんの誕生日プレゼントに。",
            'category' => "セーター",
            'price' => 6100,
            'picture_path' => "images/products/sweater01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'セーター',
            'description' => "シンプルなセーター。マストな一枚！",
            'category' => "セーター",
            'price' => 6100,
            'picture_path' => "images/products/sweater02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => 'セーター',
            'description' => "落ち着いた色合いで合わせやすいボーダーのニットセーター",
            'category' => "セーター",
            'price' => 6100,
            'picture_path' => "images/products/sweater03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        

    ]);
    }
}
