app.controller('ExamDetailController', ['$scope', 'ExamService', function($scope, ExamService) {
  $scope.apiName = '試験詳細取得API';
  $scope.api = {id: "1", url: "", response: {json: ""}};
  $scope.api.url = location.protocol + "//"  + location.host + "/api/show/" + $scope.api.id + "/";
  $scope.copyValueToUrl = function() {
      $scope.api.url = location.protocol + "//"  + location.host + "/api/show/" + $scope.api.id + "/";
  };
  $scope.showDetailJson = function() {
      ExamService.getDetail($scope.api.id, function (data) {
          $scope.api.response.json = JSON.stringify(data);
      });
  };
}]);
