app.controller('ExamListController', ['$scope', 'ExamService', function($scope, ExamService) {
  $scope.message = 'Hoge!!';
  $scope.exams = ExamService.getList(50, 1);
}]);
