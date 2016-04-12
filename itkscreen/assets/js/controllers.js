'use strict';

/* Controllers */

var groupApp = angular.module('groupApp', []);

groupApp.controller('dataControl', function ($scope, $http) {
  $http.get('assets/data/data.json').success(function(data) {
    $scope.data = data;
  });
});


groupApp.controller('groupControl', function($scope) {
  $scope.groups = [{
    group: 'ITK Ledelse',
    members:
      [
        {
          'firstname': 'Bo',
          'lastname': 'Fristed',
          'position': 'CIO',
          'image': 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=azkbc86',
          'azident': 'azkbc86'
        },
        {
          'firstname': 'Martin',
          'lastname': 'Vellerup',
          'position': 'ITK Design, afdelingsleder',
          'image': 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=azkb022',
          'azident': 'azkb022'
        },
        {
          'firstname': 'Tonny',
          'lastname': 'Jensen',
          'position': 'ITK Digital, afdelingsleder',
          'image': 'https://unsplash.it/150/150?random',
          'azident': 'azkb929'
        },
        {
          'firstname': 'Anne',
          'lastname': 'Vest Hansen',
          'position': 'ITK Digital, afdelingsleder',
          'image': 'https://unsplash.it/150/151?random',
          'azident': 'azkb263'
        },
        {
          'firstname': 'Susanne',
          'lastname': 'Iversen',
          'position': 'ITK Medier, afdelingsleder',
          'image': 'https://unsplash.it/150/152?random',
          'azident': 'azkba78'
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
          'image': 'https://unsplash.it/150/150?random',
          'azident': ''
        },
        {
          'firstname': 'Pernille',
          'lastname': 'Thorsen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/151?random',
          'azident': ''
        },
        {
          'firstname': 'Jesper',
          'lastname': 'Kristensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/152?random',
          'azident': ''
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Ricky',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/149?random',
          'azident': ''
        },
        {
          'firstname': 'Troels',
          'lastname': 'Ugilt Jensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/148?random',
          'azident': ''
        },
        {
          'firstname': 'Brian',
          'lastname': 'Stefan Jensen',
          'position': 'Team Lead, Web',
          'image': 'https://secure.gravatar.com/avatar/13879748aa52335b157743472e007543?d=https%3A%2F%2Fi.vimeocdn.com%2Fportrait%2Fdefault-red_300x300.png&s=300',
          'azident': ''
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Staadsen-Boesen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/150?random',
          'azident': ''
        },
        {
          'firstname': 'Pernille',
          'lastname': 'Thorsen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/151?random',
          'azident': ''
        },
        {
          'firstname': 'Jesper',
          'lastname': 'Kristensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/152?random',
          'azident': ''
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Ricky',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/149?random',
          'azident': ''
        },
        {
          'firstname': 'Troels',
          'lastname': 'Ugilt Jensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/148?random',
          'azident': ''
        },
        {
          'firstname': 'Pernille',
          'lastname': 'Thorsen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/151?random',
          'azident': ''
        },
        {
          'firstname': 'Jesper',
          'lastname': 'Kristensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/152?random',
          'azident': ''
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Ricky',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/149?random',
          'azident': ''
        },
        {
          'firstname': 'Troels',
          'lastname': 'Ugilt Jensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/148?random',
          'azident': ''
        }
      ]
    }, {
    group: 'ITK Digital',
    members: [{
      'firstname': 'Tonny',
      'lastname': 'Jensen',
      'position': 'ITK Digital, afdelingsleder',
      'image': 'https://unsplash.it/150/152?random',
      'azident': ''
    },
      {
        'firstname': 'Mikkel',
        'lastname': 'Staadsen-Boesen',
        'position': 'Projektleder',
        'image': 'https://unsplash.it/150/150?random',
        'azident': ''
      },
      {
        'firstname': 'Pernille',
        'lastname': 'Thorsen',
        'position': 'Projektleder',
        'image': 'https://unsplash.it/150/151?random',
        'azident': ''
      },
      {
        'firstname': 'Jesper',
        'lastname': 'Kristensen',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/152?random',
        'azident': ''
      },
      {
        'firstname': 'Mikkel',
        'lastname': 'Ricky',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/149?random',
        'azident': ''
      },
      {
        'firstname': 'Troels',
        'lastname': 'Ugilt Jensen',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/148?random',
        'azident': ''
      },
      {
        'firstname': 'Pernille',
        'lastname': 'Thorsen',
        'position': 'Projektleder',
        'image': 'https://unsplash.it/150/151?random',
        'azident': ''
      },
      {
        'firstname': 'Jesper',
        'lastname': 'Kristensen',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/152?random',
        'azident': ''
      },
      {
        'firstname': 'Mikkel',
        'lastname': 'Ricky',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/149?random',
        'azident': ''
      },
      {
        'firstname': 'Troels',
        'lastname': 'Ugilt Jensen',
        'position': 'Udvikler',
        'image': 'https://unsplash.it/150/148?random',
        'azident': ''
      }
    ]
    }, {
    group: 'ITK Lab',
    members: [{
      'firstname': '',
      'lastname': ' ',
      'position': '',
      'image': 'https://unsplash.it/150/150?random',
      'azident': ''
    }]
    }, {
    group: 'ITK Medier',
    members: [{
      'firstname': 'Susanne',
      'lastname': 'Iversen',
      'position': 'ITK Digital, afdelingsleder',
      'image': 'https://unsplash.it/150/152?random'
    }]
  }]
});
