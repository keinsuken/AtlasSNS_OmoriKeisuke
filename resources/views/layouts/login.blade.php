<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="left">
                <h1><a href="/top"><img class="title_logo" src="images/atlas.png"></a></h1>
            </div>
            <div class="right">
                <div class="name">
                    <p>〇〇さん</p>
                </div>
                <nav class="accordion">
                    <div class="accordion_button"></div>
                    <ul class="accordion_menu">
                        <li class="home"><a href="/top">HOME</a></li>
                        <li class="profile"><a href="/profile">プロフィール編集</a></li>
                        <li class="logout"><a href="/logout">ログアウト</a></li>
                    </ul>
                </nav>
                <div class="name_icon">
                    <img class="icon" src="images/icon1.png">
                </div>
            </div>
        </div>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>〇〇さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $('.accordion_button').click(function () {
            $(this).toggleClass('is-open');
            $(this).siblings('.accordion_menu').toggleClass('is-open');
        });
    </script>
</body>
</html>
