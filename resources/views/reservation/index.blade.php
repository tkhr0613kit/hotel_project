@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th>
        <th>利用者ID</th>
        <th>お名前</th>
        <th>ご住所</th>
        <th>電話番号</th>
        <th>人数</th>
        <th>チェックイン日</th>
        <th>チェックアウト日</th>
        <th>部屋番号</th>
    @foreach($reservations as $reservation)
    <tr>
        <th>{{$reservation->reservation_id}}</th>
        <th>{{$reservation->guest_id}}</th>
        <td>{{$reservation->guest->name}} 様</td>
        <td>{{$reservation->guest->address}}</td>
        <td>{{$reservation->guest->tel}}</td>
        <td>{{$reservation->number_of_guests}}名</td>
        <td>{{$reservation->check_in_date}}</td>
        <td>{{$reservation->check_out_date}}</td>

        <td>{{$reservation->reserve_lists}}</td>
    </tr>
    @endforeach
    </table>
@endsection

<style>
    table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }

</style>