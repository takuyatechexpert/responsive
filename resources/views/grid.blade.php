@extends('layouts.app')

@section('content')
<header class="grid__header">
  <h1>
    パテックフィリップ カラトラバ
  </h1>
</header>

<main class="grid__main">

  <aside class="grid__main--photo_menu">
    <section class="grid__mainphoto_menu1">
      <img src="{{ asset('/images/カラトラバ.jpg') }}" alt="時計">
    </section>
    <section class="grid__main--photo_menu2">
      <img src="{{ asset('/images/カラトラバラグ.jpg') }}" alt="腕に付けた時計">
    </section>
  </aside>

  <article class="grid__article">
    <section>
      <h2>
        カラトラバとは
      </h2> 
      <p>
        カラトラバは、1932年に「機能がフォルムを決定する」というバウハウスの哲学に基づいて設計さたRef.96（通称「クンロク」）が起源となります。
        その流れを汲み、現在はひとつのシリーズとして展開しています。
      </p>
    </section>

    <section>
      <h2>
        カラトラバの魅力
      </h2> 
      <p>
        ラウンドケースに接続される、腕に沿うような流線型の美しいラグ（または直線ラグ）。そして、視認性に優れ、かつ、高級感も演出する針とインデックス。
        どちらも最高の完成度です。
        同じようなラウンドケースの時計もたくさんありますが、
        それらをカラトラバの横に並べると、やはり存在感や風格の違いを感じます。
        本当に、カラトラバは“美しい”のです。
        特に、３針や２針のシンプルウォッチは、シンプルが故に、誤魔化しが利きません。
        高級なスーツや靴に合わせるアイテムをお探しなら、カラトラバが最適ではないでしょうか。
        きっと、他の着用アイテムさえもワンランク引き上げるような美しさは、
        皆さんに最高の満足感を与えることでしょう。
      </p>
    </section>
  </article>
</main>
<footer class="grid__fooder">
  copywrite tek-cell 2020
</footer>

@endsection