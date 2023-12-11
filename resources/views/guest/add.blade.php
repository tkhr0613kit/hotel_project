@extends('layouts.hotel')

@section('body')
    <div class="input_guest">
        <h2>※利用者登録画面</h2>
        <form action="/guest/add" method="post">
            @csrf
            お名前 <input type="text" name="name" class="guest_name">
            <br>
            電話番号 <input type="text" name="tel" class="guest_tel">
            <br>
            ご住所 <input type="text" name="address" class="guest_address">
            <br>
            <input type="submit" value="登録" class="guest_btn">
        </form>
    </div>
@endsection