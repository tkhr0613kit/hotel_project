<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Hotel Group</title>
    <style>
        li {
            list-style: none;
        }
        tr {
            font-size: large;
        }
        .main_nav {
            width: 50%;
            display: flex;
            justify-content: space-between;
        }
        .guest_name,.guest_tel,.guest_address {
            width: 51em;

        }
    </style>
</head>
<body>
    <header>
        <div class="header_title">
            <h1>New Hotel Group</h1>
        </div>
        <h2>※管理者画面</h2>
        <nav>
            <ul class="main_nav">
                <li><a href="#">ホーム</a></li>
                <li><a href="#">管理者ログイン</a></li>
                <li><a href="guest/add">利用者管理</a></li>
                <li><a href="#">予約管理</a></li>
                <li><a href="#">部屋管理</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <body>
        @yield('body')
    </body>
</body>
</html>