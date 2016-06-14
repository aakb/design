angular.module('groupApp').controller('groupControl', [ '$scope', 'dataService',
  function ($scope, dataService) {
    // Toggle direction
    $scope.directionSelected = false;
    $scope.setDirection = function () {
      $scope.directionSelected = !$scope.directionSelected;
    };


    // Toggle image style
    $scope.imageStyleSelected = true;
    $scope.setImageStyle = function () {
      $scope.imageStyleSelected = !$scope.imageStyleSelected;
    };


    // Toggle size and spacing
    $scope.largeSpacing = false;
    $scope.setSpacing = function () {
      $scope.largeSpacing = !$scope.largeSpacing;
    };


    // Se active member (flipped)
    $scope.setActive = function (member) {
      if ($scope.memberSelected === member) {
        $scope.memberSelected = '';

      } else {
        $scope.memberSelected = member;
      }
    };

    $scope.isSelected = function (member) {
      return $scope.memberSelected === member;
    };

    /**
     * Fetch data from service.
     */
    dataService.getData().then(
      function (res) {
        $scope.groups = res.data;
      },
      function (error) {
        console.error(error);
      }
    );

  }
]);

angular.module('groupApp').filter('trim', function () {
  return function(value) {
    if(!angular.isString(value)) {
      return value;
    }
    return value.replace(/^\s+|\s+$/g, ''); // you could use .trim, but it's not going to work in IE<9
  };
});