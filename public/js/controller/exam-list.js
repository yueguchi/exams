app.controller('ExamListController', ['$scope', 'ExamService', function($scope, ExamService) {
  $scope.apiName = '試験一覧取得API';
  $scope.api = {count: '20', page: '1', response: {json: ""}};
  $scope.showListJson = function() {
      ExamService.getList($scope.api.count, $scope.api.page, function (data) {
          $scope.exams = data;
          $scope.api.response.json = JSON.stringify(data);
      });
  };
}]);
