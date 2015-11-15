app.factory('ExamService', ['$http', function($http) {
    return {
        getList : function(limit, page) {
            var url = "/api/php/list/limit/" + limit + "/page/" + page + "/";
            return $http.get(url)
              .success(function (data) {
                  for(var i = 0; i < data.length; i++) {
                      console.log(data[i].title);
                  }
                  return data;
              })
              .error(function (err) {
                  return err;
              });
        }
    };
}]);
