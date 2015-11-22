app.controller('ExamListController', ['$scope', 'ExamService', function($scope, ExamService) {
  $scope.apiName = '試験一覧取得API';
  $scope.api = {lang: "php", count: '20', page: '1', url: "", response: {json: ""}};
  $scope.api.url = location.protocol + location.host + "/api/php/list/limit/" + $scope.api.count + "/page/" + $scope.api.page + "/";
  $scope.showListJson = function() {
      ExamService.getList($scope.api.count, $scope.api.page, function (data) {
          $scope.api.response.json = JSON.stringify(data);
      });
  };
}]);
