/**
 * @file
 * Download user images.
 */

var fs = require('fs');
var httpntlm = require('httpntlm');
var prompt = require('prompt');
var Q = require('q');
var jsonfile = require('jsonfile');

/**
 * Helper function to download images.
 */
var download = function (id, username, password) {
  var deferred = Q.defer();

  httpntlm.get({
    url: 'http://telefonbog/webservice/ws_nypersondatabase/TLFgetpersonerbyhierarkiid_date_orgid/?orgid=' + id + '&format=json',
    username: username,
    password: password,
    workstation: '',
    domain: ''
  }, function (err, response){
    if(err) {
      deferred.reject(err);
    }

    var json = JSON.parse(response.body);
    json.id = id;
    deferred.resolve(json);
  });

  return deferred.promise;
};

/**
 * Error callback function.
 */
function onErr(err) {
  console.log(err);
  return 1;
}


// Define data outout format.
var output = [{
  "id": 1103,
  "group": "Ledelse og OS2",
  "members": { }
}, {
  "id": 1395,
  "group": "ITK Design",
  "members": { }
}, {
  "id": 1400,
  "group": "ITK Digital",
  "members": { }
}, {
  "id": 1684,
  "group": "ITK Lab",
  "members": { }
}, {
  "id": 1730,
  "group": "ITK Medier",
  "members": { }
}];

prompt.start();
prompt.get(['username', { name: 'password', hidden: true }], function (err, result) {
  if (err) {
    return onErr(err);
  }

  Q.all([
    download(1103, result.username, result.password), // Ledelse
    download(1684, result.username, result.password), // Lap
    download(1730, result.username, result.password), // Media
    download(1400, result.username, result.password), // Digital
    download(1395, result.username, result.password)  // Design
  ]).then(
    function (data) {
      console.log(require('util').inspect(data, true, 1));
      for (var i in data) {
        for (var j in output) {
          if (data[i].id === output[j].id) {
            output[j].members = data[i];

            // HACK HACK HACK HACK
            if (output[j].id === 1103) {
              output[j].members.data.unshift({
                "personid": "12523",
                "azident": "azkba52",
                "email": "hapel@aarhus.dk",
                "tlf1": "89409300",
                "tlf2": "29208356",
                "stilling": "Forvaltningschef",
                "kaldenavn":"Rolf Hapel",
                "lokale":"ingen",
                "kommentar":"Migreret",
                "status":"updated 2015.06.15"
              })
            }
          }
        }
      }

      var file = 'data.json';
      jsonfile.writeFile(file, output, {spaces: 2}, function (err) {
        console.error(err)
      })
    },
    function (err) {
      console.log(err);
    }
  )

});




