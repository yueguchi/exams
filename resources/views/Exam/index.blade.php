@extends('layout')
@section('content')
<div ng-controller="ExamListController">
    <h1>@{{apiName}}</h1>
    <input type="text" name="count" ng-model="api.count">
    <input type="text" name="page" ng-model="api.page">
    <input type="button" value=" GET " ng-click="showListJson()" />
    <ol>
        <li ng-repeat="exam in exams">@{{exam.title}}</li>
    </ol>
    <div class="json">
        @{{api.response.json}}
    <div>
<div>
@endsection
