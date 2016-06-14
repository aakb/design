angular.module('groupApp').service('dataService', ['$http', '$q',
  function ($http, $q) {
    "use strict";

    /**
     * Load json file.
     *
     * @returns {*|{}}
     */
    this.getData = function getData() {
      return $http.get('data/data.json');
    }
  }
]);