@extends('/common/layout')
@section('content')
<div>
    <h1>API一覧</h1>
    <ul class="api-list">
        <li>{!! link_to("/front/api/list/", "試験一覧API") !!}</li>
        <li>{!! link_to("/front/api/detail/", "試験詳細API") !!}</li>
        <li>{!! link_to("/front/api/comment/list/", "コメント取得API") !!}</li>
    </ul>
<div>
<div>
    <h1>フロントサービス</h1>
    <ul class="front-list">
        <li>{!! link_to("/front/php/exam/list/", "PHP試験一覧") !!}</li>
        <li>{!! link_to("/front/java/exam/list/", "Java試験一覧") !!}</li>
        <li>{!! link_to("/front/ruby/exam/list/", "Ruby試験一覧") !!}</li>
    
</div>
@endsection
