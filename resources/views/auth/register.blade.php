@extends('layouts.app')

@section('content')
<div class="text-center mt-5 mb-5">
  <button type="button"  class="btn btn-info moji1" data-toggle="modal" data-target=".bd-example-modal-xl">ヘルプ</button>

  <!-- 『ヘルプ』モーダル -->
  <div class="modal fade bd-example-modal-xl moji1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        はじめての方はこの画面のまま登録をしましょう。<br>すでに登録したことがある方は右上のログインを押してください。<br>
        <img src="{{url('../images/login02.png')}}" class="img3">
      </div>
    </div>
  </div>
  <!-- 『ヘルプ』モーダルの終わり -->

</div>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="">
        <div class="card-header text-center" style="">
          <h2>{{ __('新規会員登録画面') }}</h2>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- 名前入力 -->
            <div class="form-group row">
              <h1 for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</h1>

              <div class="col-md-6">
                <input id="name" size="25" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal3">
                  ヘルプ
                </button>

                <!-- 『名前』モーダル -->
                <div class="modal fade moji1" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">名前を入力してみましょう。</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        自分の名前を入力してみましょう。<br>
                        例）はじめて　太郎
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『名前』モーダル終わり -->

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『名前』入力終わり -->


            <!-- 『メールアドレス』入力 -->
            <div class="form-group row">
              <h1 for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</h1>

              <div class="col-md-6">
                <input id="email" type="email" size="25" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal">
                  ヘルプ
                </button>

                <!-- 『メールアドレス』モーダル -->
                <div class="modal fade moji1" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">メールアドレスを入力してみましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        自分のメールアドレスを入力しましょう<br>
                        例）hajimete@gmail.com
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『メールアドレス』モーダル終わり -->

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『メールアドレス』入力終わり -->


            <!-- 『パスワード』入力 -->
            <div class="form-group row">
              <h1 for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</h1>

              <div class="col-md-6">
                <input id="password" type="password" size="25" placeholder="６文字以上、半角入力"class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal1">
                  ヘルプ
                </button>


                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『パスワード』入力終わり -->

                <!-- 『パスワード』モーダル -->
                <div class="modal fade moji1" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">パスワードを決めましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        自分が覚えやすいパスワードを作りましょう。<br>
                        例）hajimete34
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『パスワード』モーダル終わり -->

            <!-- 『パスワード確認』入力 -->
            <div class="form-group row">
              <h1 for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</h1>


              <div class="col-md-6">
                <input id="password-confirm" type="password" size="25" placeholder="６文字以上、半角入力" name="password_confirmation" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal2">
                  ヘルプ
                </button>

                <!-- 『パスワード確認』モーダル -->
                <div class="modal fade moji1" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                        確認用でパスワードをもう一度入れましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        もう一度パスワードを入れよう
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『パスワード確認』モーダル終わり -->

              </div>
            </div>
            <!-- 『パスワード確認』終わり -->




            <!--利用規約 -->
            <div class="frame frame-red">
              <div class="frame-title caution">
                利用規約
              </div>
<div class="grad-wrap">
              <span class="grad-trigger"></span>
              <div class="grad-item">
                <p>この利用規約（以下，「本規約」といいます。）は，Team34（以下，「当方」といいます。）がこのウェブサイト上で提供するサービス（以下，「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下，「ユーザー」といいます。）には，本規約に従って，本サービスをご利用いただきます。
                <h6>第1条（適用）</h6>
                本規約は，ユーザーと当方との間の本サービスの利用に関わる一切の関係に適用されるものとします。
                当方は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。
                本規約の規定が前条の個別規定の規定と矛盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。
                <h6>第2条（利用登録）</h6>
                本サービスにおいては，登録希望者が本規約に同意の上，当方の定める方法によって利用登録を申請し，当方がこれを承認することによって，利用登録が完了するものとします。
                当方は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。
                利用登録の申請に際して虚偽の事項を届け出た場合
                本規約に違反したことがある者からの申請である場合
                その他，当方が利用登録を相当でないと判断した場合
                <h6>第3条（ユーザーIDおよびパスワードの管理）</h6>
                ユーザーは，自己の責任において，本サービスのユーザーIDおよびパスワードを適切に管理するものとします。
                ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与し，もしくは第三者と共用することはできません。当方は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。
                ユーザーID及びパスワードが第三者によって使用されたことによって生じた損害は，当方に故意又は重大な過失がある場合を除き，当方は一切の責任を負わないものとします。
                <h6>第4条（利用料金および支払方法）</h6>
                ユーザーは，本サービスの有料部分の対価として，当方が別途定め，本ウェブサイトに表示する利用料金を，当方が指定する方法により支払うものとします。
                ユーザーが利用料金の支払を遅滞した場合には，ユーザーは年14．6％の割合による遅延損害金を支払うものとします。
                <h6>第5条（禁止事項）</h6>
                ユーザーは，本サービスの利用にあたり，以下の行為をしてはなりません。
                法令または公序良俗に違反する行為
                犯罪行為に関連する行為
                本サービスの内容等，本サービスに含まれる著作権，商標権ほか知的財産権を侵害する行為
                当方，ほかのユーザー，またはその他第三者のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為
                本サービスによって得られた情報を商業的に利用する行為
                当方のサービスの運営を妨害するおそれのある行為
                不正アクセスをし，またはこれを試みる行為
                他のユーザーに関する個人情報等を収集または蓄積する行為
                不正な目的を持って本サービスを利用する行為
                本サービスの他のユーザーまたはその他の第三者に不利益，損害，不快感を与える行為
                他のユーザーに成りすます行為
                当方が許諾しない本サービス上での宣伝，広告，勧誘，または営業行為
                面識のない異性との出会いを目的とした行為
                当方のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為
                その他，当方が不適切と判断する行為
                <h6>第6条（本サービスの提供の停止等）</h6>
                当方は，以下のいずれかの事由があると判断した場合，ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。
                本サービスにかかるコンピュータシステムの保守点検または更新を行う場合
                地震，落雷，火災，停電または天災などの不可抗力により，本サービスの提供が困難となった場合
                コンピュータまたは通信回線等が事故により停止した場合
                その他，当方が本サービスの提供が困難と判断した場合
                当方は，本サービスの提供の停止または中断により，ユーザーまたは第三者が被ったいかなる不利益または損害についても，一切の責任を負わないものとします。
                <h6>第7条（利用制限および登録抹消）</h6>
                当方は，ユーザーが以下のいずれかに該当する場合には，事前の通知なく，ユーザーに対して，本サービスの全部もしくは一部の利用を制限し，またはユーザーとしての登録を抹消することができるものとします。
                本規約のいずれかの条項に違反した場合
                登録事項に虚偽の事実があることが判明した場合
                料金等の支払債務の不履行があった場合
                当方からの連絡に対し，一定期間返答がない場合
                本サービスについて，最終の利用から一定期間利用がない場合
                その他，当方が本サービスの利用を適当でないと判断した場合
                当方は，本条に基づき当方が行った行為によりユーザーに生じた損害について，一切の責任を負いません。
                <h6>第8条（退会）</h6>
                ユーザーは，当方の定める退会手続により，本サービスから退会できるものとします。
                <h6>第9条（保証の否認および免責事項）</h6>
                当方は，本サービスに事実上または法律上の瑕疵（安全性，信頼性，正確性，完全性，有効性，特定の目的への適合性，セキュリティなどに関する欠陥，エラーやバグ，権利侵害などを含みます。）がないことを明示的にも黙示的にも保証しておりません。
                当方は，本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし，本サービスに関する当方とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合，この免責規定は適用されません。
                前項ただし書に定める場合であっても，当方は，当方の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当方またはユーザーが損害発生につき予見し，または予見し得た場合を含みます。）について一切の責任を負いません。また，当方の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は，ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。
                当方は，本サービスに関して，ユーザーと他のユーザーまたは第三者との間において生じた取引，連絡または紛争等について一切責任を負いません。
                <h6>第10条（サービス内容の変更等）</h6>
                当方は，ユーザーに通知することなく，本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし，これによってユーザーに生じた損害について一切の責任を負いません。
                <h6>第11条（利用規約の変更）</h6>
                当方は，必要と判断した場合には，ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお，本規約の変更後，本サービスの利用を開始した場合には，当該ユーザーは変更後の規約に同意したものとみなします。
                <h6>第12条（個人情報の取扱い）</h6>
                当方は，本サービスの利用によって取得する個人情報については，当方「プライバシーポリシー」に従い適切に取り扱うものとします。
                <h6>第13条（通知または連絡）</h6>
                ユーザーと当方との間の通知または連絡は，当方の定める方法によって行うものとします。当方は,ユーザーから,当方が別途定める方式に従った変更届け出がない限り,現在登録されている連絡先が有効なものとみなして当該連絡先へ通知または連絡を行い,これらは,発信時にユーザーへ到達したものとみなします。
                <h6>第14条（権利義務の譲渡の禁止）</h6>
                ユーザーは，当方の書面による事前の承諾なく，利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し，または担保に供することはできません。
                <h6>第15条（準拠法・裁判管轄）</h6>
                本規約の解釈にあたっては，日本法を準拠法とします。
                本サービスに関して紛争が生じた場合には，当方の本店所在地を管轄する裁判所を専属的合意管轄とします。
                以上</p>
              </div>
            </div>
            </div>
            <div class="position">
              <div class="form-group row comfirm">
                <div class="cp_ipcheck">
                  <label>
                    <input type="checkbox" class="checkbox" />
                    <span class="checkbox-icon ml-2"></span>
                    <b>利用規約に同意する</b>
                </label>
                </div>
              </div>
            </div>
            

            <!-- 『新規登録する』 -->
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">

                <label for="trigger" class="open_button btn btn-primary text-center btn-lg">{{ __('新規登録する') }}</label>

                <!-- 『新規登録する』モーダル -->
                <div class="modal_wrap moji1">
                  <input id="trigger" type="checkbox">
                  <div class="modal_overlay">
                    <label for="trigger" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger" class="close_button">✖</label>
                      <h2 style="text-align: center;" class="border-bottom">新規登録画面</h2>
                      <h3 style="text-align: center;">
                      打ち込まれた情報をもとに新規登録を行います</h3>
                      <div class="text-center" style="text-align: center;">
                        <button type="submit" class="btn btn-primary btn-lg">
                          {{ __('新規登録') }}
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『新規登録する』モーダル終わり -->

              </div>
            </div>
            <!-- 『新規登録する』終わり -->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
