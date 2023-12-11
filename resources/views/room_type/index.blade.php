<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>APホテル</title>
    <style>
        body {
            color: #333333;
            background-color: #FFFFFF;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width: 90%;
            -webkit-text-size-adjust: 100%;
        }
        a {
            text-decoration: none;
        }
        .main-nav {
            display: flex;
            font-size: 1.25rem;
            text-transform: uppercase;
            list-style: none;
        }
        .main-nav li {
            margin-left: 36px;
        }
    </style>
</head>
<body>
    <header>
        <h1>APホテル</h1>
        <nav>
            <ul class="main-nav">
                <li><a href="/room_name">部屋名称</a></li>
                <li><a href="/room_capacity">宿泊可能人数</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/room_name/add">部屋名称</a></li>
                <li><a href="/room_capacity/add">宿泊可能人数</a></li>
            </ul>
        </nav>
    </header>
    <body>
        @yield('body')
    </body>
</body>
</html>