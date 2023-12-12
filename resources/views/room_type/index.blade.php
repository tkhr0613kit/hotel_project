@extends('layouts.hotel')

@section('body')
    

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

         img {
            width:370px;
            height:270px;
        }
        .single-img,
        .single-text{
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <header>
        <h1>お部屋のご案内</h1>       
    </header>
    <body>
        {{-- <nav>  
            <ul class="main-nav">
                <li><a href="/room_name">部屋名称</a></li>
                <li><a href="/room_capacity">宿泊可能人数</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/room_name/add">部屋名称</a></li>
                <li><a href="/room_capacity/add">宿泊可能人数</a></li>
            </ul>
        </nav> --}}
        <br>
        <h2>シングル</h2>
        <img src = "{{ asset('img/single.jpeg')}}" alt="single">
        <p class="text">1名様用の部屋です。2名様でご利用の場合はソファーをエキストラベッドにセットしてご利用ください。エキストラベッドは半額でご利用いただけます。</p>
        
            <br>
            <h2>ツイン</h2>
            <img src = "{{ asset('img/twin.jpeg')}}" alt="twin">
            <p class = "text">2名様用のお部屋です。</p>

        @yield('body')
    </body>
</body>
</html>
@endsection