@extends('layouts.hotel')

@section('body')
<h2>※入力内容確認</h2>
<table>
    <tr>
        <th>お名前</th><th>電話番号</th><th>ご住所</th>
    </tr>
    <tr>
            <td>{{$param->name}}</td>
            <td>{{$param->tel}}</td>
            <td>{{$param->address}}</td>
    </tr>
</table>
@endsection
