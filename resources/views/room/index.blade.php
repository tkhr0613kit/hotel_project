@section('content')
<table>
    <tr>
        <th>Room_ID</th>
        <th>Room_number</th>
    </tr>
    @foreach ($rooms as $room)
    <tr>
        <td>{{$room->room_id}}</td>
        <td>{{$room->room_number}}</td>
    </tr>
        
    @endforeach
</table>
@endsection