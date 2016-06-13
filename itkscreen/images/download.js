var fs = require('fs');
var ntlm = require('request-ntlm');



var download = function(az){
  var httpntlm = require('httpntlm');

  var f=fs.createWriteStream(az + '.jpg');

  httpntlm.get({
    url: 'http://srvwebaak01/TLFimageupload/imageHandler.ashx?ident=' + az,
    encoding: null,
    username: 'azkbd85',
    password: 'Fn)33>mp=d',
    workstation: '',
    domain: ''
  }, function (err, res){
    if(err) return err;
    res.setEncoding('binary');
    
    console.log(res);
    fs.writeFile(az + '.jpg', res.body, 'binary', function(err){
      if (err) throw err;
      console.log('File saved.')
    })
  });
};



var json = require('../data.json');

for (var i in json) {
  for (var j in json[i].members.data) {
    var az = json[i].members.data[j].azident.trim();
    download(az);
  }
}

