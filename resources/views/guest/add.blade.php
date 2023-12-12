@extends('layouts.hotel')

@section('body')
    <div class="input_guest">
        <h2>※利用者登録画面</h2>
        <form action="/guest/add" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">お名前</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">電話番号</span>
                <input type="text" name="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">ご住所</span>
                <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <input type="submit" value="登録" class="guest_btn btn btn-secondary">
            
            {{-- お名前 <input type="text" name="name" class="guest_name form-control-sm">
            <br>
            電話番号 <input type="text" name="tel" class="guest_tel form-control-sm">
            <br>
            ご住所 <input type="text" name="address" class="guest_address form-control-sm">
            <br> --}}

        </form>
    </div>
@endsection