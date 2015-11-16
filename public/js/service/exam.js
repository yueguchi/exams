app.factory('ExamService', ['$http', function($http) {
    return {
        getList : function(limit, page, callback) {
            var url = "/api/php/list/limit/" + limit + "/page/" + page + "/";
            return $http.get(url)
              .success(function (data) {
                  callback(data);
              })
              .error(function (err) {
                  alert("データの取得に失敗しました : " + err);
              });
        }
    };
}]);
