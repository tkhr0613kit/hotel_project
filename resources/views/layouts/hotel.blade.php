<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>New Hotel Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

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
<<<<<<< HEAD
        .guest_name,.guest_tel,.guest_address {

            width: 45em;

       }
=======
        /* .guest_name,.guest_tel,.guest_address {
            width: 45em;
        } */
>>>>>>> 535be51 (guestsテーブルid名修正、bootstrap追加)
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