@extends('layouts.logout')

<?php
$username = $_POST["username"]

?>

@section('content')

<div id="clear">
  <p><?php echo htmlspecialchars($username)?>さん</p>
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection
