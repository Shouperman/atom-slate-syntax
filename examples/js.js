/**
 * JS example adapted from module docs
 * @see https://docs.angularjs.org/guide/module
 */

angular.module('myModule', []).
  value('a', 123).
  factory('a', function() { return 123; }).
  directive('directiveName', ...).
  filter('filterName', ...);

// is same as

angular.module('myModule', []).
  config(function($provide, $compileProvider, $filterProvider) {
    $provide.value('a', 123);
    $provide.factory('a', function() { return 123; });
    $compileProvider.directive('directiveName', ...);
    $filterProvider.register('filterName', ...);
  });


  angular.module('greetMod', []).

  factory('alert', function($window) {
    return function(text) {
      $window.alert(text);
    };
  }).

  value('salutation', 'Hello').

  factory('greet', function(alert, salutation) {
    var goodbye = " Have a nice day!";
    var useless = {
      name: 'useless1',
      value: 1.0,
      content: [1,2,3],
    };

    angular.forEach(useless.content, (v,i) => console.log(v));

    return function(name) {
      alert(salutation + ' ' + name + '!');
      alert(goodbye);
    };
  });
