@extends('layouts.hotel')

@section('body')
    <h2>※利用者一覧</h2>
    <table>
        <th>お名前</th><th>電話番号</th><th>ご住所</th>
        @foreach ($guests as $guest)
            <tr>
                <td>{{$guest->name}}</td>
                <td>{{$guest->tel}}</td>
                <td>{{$guest->address}}</td>

            </tr>
        @endforeach
    </table>
@endsection

<style>
    
</style>