app.controller('ExamListController', ['$scope', 'ExamService', function($scope, ExamService) {
    $scope.apiName = '試験一覧取得API';
    $scope.api = {lang: 'php', limit: '20', page: '1', url: '', response: {json: ''}};
    $scope.api.url = location.protocol + '//'  + location.host + '/api/' + $scope.api.lang  + '/list/limit/' + $scope.api.limit + '/page/' + $scope.api.page + '/';
    $scope.copyValueToUrl = function() {
        $scope.api.url = location.protocol + '//'  + location.host + '/api/' + $scope.api.lang  + '/list/limit/' + $scope.api.limit + '/page/' + $scope.api.page + '/';
    };
    $scope.showListJson = function() {
        ExamService.getList($scope.api, function (data) {
            $scope.api.response.json = JSON.stringify(data);
        });
    };
}]);
