'use strict';

/* Controllers */

var groupApp = angular.module('groupApp', []);

groupApp.controller('dataControl', function ($scope, $http) {
  $http.get('assets/data/data.json').success(function(data) {
    $scope.data = data;
  });
});


groupApp.controller('groupControl', function($scope) {
  // Toggle direction
  $scope.directionSelected = false;
  $scope.setDirection = function() {
    $scope.directionSelected = !$scope.directionSelected;
  };


  // Toggle image style
  $scope.imageStyleSelected = true;
  $scope.setImageStyle = function() {
    $scope.imageStyleSelected = !$scope.imageStyleSelected;
  };


  // Toggle size and spacing
  $scope.largeSpacing= false;
  $scope.setSpacing = function() {
    $scope.largeSpacing = !$scope.largeSpacing;
  };


  // Se active member (flipped)
  $scope.setActive = function(member) {
    if ($scope.memberSelected === member) {
      $scope.memberSelected = '';

    } else {
      $scope.memberSelected = member;
    }
  };

  $scope.isSelected = function(member) {
    return $scope.memberSelected === member;
  };

  $scope.groups = [{
    group: 'Ledelse',
    members:
      [
        {
          'firstname': 'Rolf',
          'lastname': 'Hapel',
          'position': 'Forvaltningschef',
          'image': 'https://pbs.twimg.com/profile_images/288490738/Pas.jpg',
          'azident': 'azkbc86',
          'email': 'example@example.com',
          'quote': 'Quote!'
        },
        {
          'firstname': 'Bo',
          'lastname': 'Fristed',
          'position': 'CIO, ITK',
          'image': 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=azkbc86',
          'azident': 'azkbc86',
          'email': 'example@example.com',
          'quote': 'Quote!'
        },
        {
          'firstname': 'Martin',
          'lastname': 'Vellerup',
          'position': 'Afdelingsleder, ITK Design',
          'image': 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=azkb022',
          'azident': 'azkb022',
          'email': 'example@example.com',
          'quote': 'Quote!'
        },
        {
          'firstname': 'Tonny',
          'lastname': 'Jensen',
          'position': 'Afdelingsleder, ITK Digital',
          'image': 'https://unsplash.it/150.46?random',
          'azident': 'azkb929',
          'email': 'example@example.com',
          'quote': 'Quote!'
        },
        {
          'firstname': 'Anne',
          'lastname': 'Vest Hansen',
          'position': 'Afdelingsleder, ITK Lab',
          'image': 'https://unsplash.it/150.47?random',
          'azident': 'azkb263',
          'email': 'example@example.com',
          'quote': 'Quote!'
        },
        {
          'firstname': 'Susanne',
          'lastname': 'Iversen',
          'position': 'Afdelingsleder, ITK Medier',
          'image': 'https://unsplash.it/150.48?random',
          'azident': 'azkba78',
          'email': 'example@example.com',
          'quote': 'Quote!'
        }
      ]
    }, {
    group: 'ITK Design',
    members:
      [
        {
          'firstname': 'Brian',
          'lastname': 'Stefan Jensen',
          'position': 'Team Lead, Web',
          'image': 'https://secure.gravatar.com/avatar/13879748aa52335b157743472e007543?d=https%3A%2F%2Fi.vimeocdn.com%2Fportrait%2Fdefault-red_300x300.png&s=300',
          'azident': 'azkb020'
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Staadsen-Boesen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150.1?random',
          'azident': ''
        },
        {
          'firstname': 'Pernille',
          'lastname': 'Thorsen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150.2?random',
          'azident': ''
        },
        {
          'firstname': 'Jesper',
          'lastname': 'Kristensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150.3?random',
          'azident': ''
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Ricky',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150.4?random',
          'azident': ''
        },
        {
          'firstname': 'Troels',
          'lastname': 'Ugilt Jensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150.5?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.6?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.7?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.8?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.9?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.10?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.11?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.12?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.13?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.14?random',
          'azident': ''
        },
        {
          'firstname': 'Fornavn',
          'lastname': 'Efternavn',
          'position': 'Titel',
          'image': 'https://unsplash.it/150.15?random',
          'azident': ''
        }
      ]
    }, {
    group: 'ITK Digital',
    members: [{
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
      'image': 'https://unsplash.it/150.16?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.17?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.18?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.19?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.20?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.21?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.22?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.23?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.24?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.25?random',
        'azident': ''
      }
    ]
    }, {
    group: 'ITK Lab',
    members: [{
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.26?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.27?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.28?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.29?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.30?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.31?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.32?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.33?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.34?random',
      'azident': ''
    },
    {
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.35?random',
      'azident': ''
    }]
    }, {
    group: 'ITK Medier',
    members: [{
      'firstname': 'Fornavn',
      'lastname': 'Efternavn',
      'position': 'Titel',
      'image': 'https://unsplash.it/150.36?random',
      'azident': ''
    },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.37?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.38?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.39?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.40?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.41?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.42?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.43?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.44?random',
        'azident': ''
      },
      {
        'firstname': 'Fornavn',
        'lastname': 'Efternavn',
        'position': 'Titel',
        'image': 'https://unsplash.it/150.45?random',
        'azident': ''
      }]
  }]
});
