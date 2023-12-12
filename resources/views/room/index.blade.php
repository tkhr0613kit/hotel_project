@extends('layouts.hotel')

部屋予約ページ


@section('body')

<table>
    <tr>
        <th>Room_ID</th>
        <th>部屋の種類</th>
        <th>Room_number</th>
    </tr>
    @foreach ($rooms as $room)
    <tr>
        <td>{{$room->room_id}}</td>
        {{-- ルームネームを取り出したい場合 --}}
        <td>{{$room->room_type->room_name}}</td>
        <td>{{$room->room_number}}</td>
    </tr>
        
    @endforeach
</table>
@endsection