@extends('layout')
@section('content')
<div ng-controller="ExamListController">
    <h1>API一覧</h1>
    <ul>
        <li>{!! link_to("/front/api/list/", "試験一覧API") !!}</li>
        <li>{!! link_to("/front/api/detail/", "試験詳細API") !!}</li>
        <li>{!! link_to("/front/api/comment/list/", "コメント取得API") !!}</li>
    </ul>
<div>
@endsection
