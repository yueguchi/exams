@extends('layout')
@section('content')
<div ng-controller="ExamListController">
    <h1>@{{message}}</h1>
    <ul>
        <li ng-repeat="exam in exams">@{{exam.title}}</li>
    </ul>
<div>
@endsection
