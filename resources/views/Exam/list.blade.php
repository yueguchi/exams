@extends('/common/layout')
@section('content')
<div ng-controller="ExamListController">
    <h1>@{{apiName}}</h1>
    <div class="description">
        langに指定した言語の試験一覧を取得します。<br>limitで一度に取得する件数を指定し、pageはindexを指定します。
    </div>
    <div class="api-input">
        <div class="input-lang">
            {!! Form::text('lang', 'lang', ['readonly', 'class' => 'input-label']);  !!} <span class="icon-equal"></span> <input type="text" name="count" ng-model="api.lang" class="input-value" ng-keyup='copyValueToUrl()'>
        </div>
        <div class="input-count">
            {!! Form::text('count', 'limit', ['readonly', 'class' => 'input-label']); !!} <span class="icon-equal"></span> <input type="text" name="limit" ng-model="api.limit" class="input-value" ng-keyup='copyValueToUrl()'>
        </div>
        <div class="input-page">
            {!! Form::text('page', 'page', ['readonly', 'class' => 'input-label']);  !!} <span class="icon-equal"></span> <input type="text" name="page" ng-model="api.page" class="input-value" ng-keyup='copyValueToUrl()'>
        </div>
        <div class="form-submit">
            <input type="button" value=" GET " ng-click="showListJson()" class="submit-api" />
        </div>
    </div>
    <div class="api-url">
        {!! Form::label('api-url', '▼URL'); !!} {!! Form::textarea('api-url', "@{{api.url}}", ['cols' => '10', 'rows' => '2']); !!}
    </div>
    <div class="api-result">
        {!! Form::textarea('api-result-json-text', "@{{api.response.json}}", ['readonly', 'cols' => '12', 'rows' => '5', 'class' => 'api-result-json-text']) !!}
    <div>
<div>
@endsection
