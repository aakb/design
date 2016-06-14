/**
 * @file
 * Download user images.
 */

var fs = require('fs');
var httpntlm = require('httpntlm');
var prompt = require('prompt');
var json = require('../data/data.json');

/**
 * Helper function to download images.
 */
var download = function (az, username, password) {
  httpntlm.get({
    url: 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=' + az,
    username: username,
    password: password,
    workstation: '',
    domain: '',
    binary: true
  }, function (err, response){
    if(err) return console.log(err);
    fs.writeFile(az + '.jpg', response.body, function (err) {
      if(err) {
        return console.log("error writing file");
      }
      console.log(".");
    });
  });
};

/**
 * Error callback function.
 */
function onErr(err) {
  console.log(err);
  return 1;
}

prompt.start();
prompt.get(['username', { name: 'password', hidden: true }], function (err, result) {
  if (err) {
    return onErr(err);
  }

  for (var i in json) {
    for (var j in json[i].members.data) {
      var az = json[i].members.data[j].azident.trim();
      download(az, result.username, result.password);
    }
  }
});
