'use strict';

/* Controllers */

var staffApp = angular.module('staffApp', []);

staffApp.controller('staffControl', function($scope) {
  $scope.staffs = [{
    group: 'ITK Ledelse',
    members:
      [{
        'firstname': 'Bo',
        'lastname': 'Fristed',
        'position': 'CIO',
        'image': 'https://www.aakb.dk/sites/www.aakb.dk/files/styles/ding_list_large/public/files/profile_image/277/bo_fristed_ny.jpg'
      }]
    }, {
    group: 'ITK Design',
    members:
      [
        {
        'firstname': 'Martin',
        'lastname': 'Vellerup',
        'position': 'ITK Design, afdelingsleder',
        'image': 'https://pbs.twimg.com/profile_images/446309768375066624/nhg4TyM9.jpeg'
        },
        {
          'firstname': '2',
          'lastname': '2',
          'position': '2',
          'image': 'https://unsplash.it/150/149?random'
        }
      ]
    }, {
    group: 'ITK Digital',
    members: [{
      'firstname': 'Tonny',
      'lastname': 'Jensen',
      'position': 'ITK Digital, afdelingsleder',
      'image': 'https://unsplash.it/150/152?random'
    }]
    }, {
    group: 'ITK Lab',
    members: [{
      'firstname': 'Anne',
      'lastname': 'Vest Hansen',
      'position': 'ITK Lab, afdelingsleder',
      'image': 'https://unsplash.it/150/153?random'
    }]
  }]
});
