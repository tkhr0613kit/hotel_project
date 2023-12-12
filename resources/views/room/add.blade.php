@extends('layouts.hotel')

部屋予約追加

@section('body')
<form action="/room/add" method="post">
    <table>
        @csrf
        <tr><th>部屋番号:</th><td><input type="text" name="room_number" ></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection 