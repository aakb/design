'use strict';

/* Controllers */

var groupApp = angular.module('groupApp', []);

groupApp.controller('groupControl', function($scope) {
  $scope.groups = [{
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
          'firstname': 'Brian',
          'lastname': 'Stefan Jensen',
          'position': 'Team Lead, Web',
          'image': 'https://secure.gravatar.com/avatar/13879748aa52335b157743472e007543?d=https%3A%2F%2Fi.vimeocdn.com%2Fportrait%2Fdefault-red_300x300.png&s=300'
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Staadsen-Boesen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/150?random'
        },
        {
          'firstname': 'Pernille',
          'lastname': 'Thorsen',
          'position': 'Projektleder',
          'image': 'https://unsplash.it/150/151?random'
        },
        {
          'firstname': 'Jesper',
          'lastname': 'Kristensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/152?random'
        },
        {
          'firstname': 'Mikkel',
          'lastname': 'Ricky',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/149?random'
        },
        {
          'firstname': 'Troels',
          'lastname': 'Ugilt Jensen',
          'position': 'Udvikler',
          'image': 'https://unsplash.it/150/148?random'
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
      'image': 'https://unsplash.it/150/150?random'
    }]
    }, {
    group: 'ITK Digital',
    members: [{
      'firstname': 'Tonny',
      'lastname': 'Jensen',
      'position': 'ITK Digital, afdelingsleder',
      'image': 'https://unsplash.it/150/152?random'
    }]
  }]
});
