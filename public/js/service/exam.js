app.factory('ExamService', ['$http', function($http) {
    return {
        getList : function(obj, callback) {
            var url = "/api/" + obj.lang + "/list/limit/" + obj.limit + "/page/" + obj.page + "/";
            return $http.get(url)
              .success(function (data) {
                  callback(data);
              })
              .error(function (err) {
                  alert("データの取得に失敗しました : " + err);
              });
        },
        getDetail : function(id, callback) {
            var url = "/api/show/" + id + "/";
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
