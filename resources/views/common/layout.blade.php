<!DOCTYPE HTML>
<html ng-app="examFront">
<head>
    <meta charset="UTF-8">
    <title>Exam Front</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/controller/exam-list.js"></script>
    <script src="/js/controller/exam-detail.js"></script>
    <script src="/js/service/exam.js"></script>
    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/header.css') !!}
</head>
<body>
    <div class="header">
        @section('header')
            @include('common.header')
        @show
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
    </div>
</body>
</html>
