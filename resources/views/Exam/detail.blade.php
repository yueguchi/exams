@extends('/common/layout')
@section('content')
<div ng-controller="ExamDetailController">
    <h1>@{{apiName}}</h1>
    <div class="description">
        idに指定した試験の詳細情報を返却します。idは試験一覧取得APIで取得したidを指定してください。
    </div>
    <div class="api-input">
        <div class="input-e-id">
            {!! Form::text('e-id', 'e-id', ['readonly', 'class' => 'input-label']);  !!} <span class="icon-equal"></span> <input type="text" name="id" ng-model="api.id" class="input-value" ng-keyup='copyValueToUrl()'>
        </div>
        <div class="form-submit">
            <input type="button" value=" GET " ng-click="showDetailJson()" class="submit-api" />
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
