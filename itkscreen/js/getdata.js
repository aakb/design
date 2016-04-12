
$(document).ready(function() {

  var personArray  = [];
  login("az18221","John1980");


function login(username, password) {
  $.ajax
  ({
    type: "POST",
    //SEND TO MY SERVER URL
    url: "http://srvwebaak01/webservice/ws_nypersondatabase/getpersonermobil/?query=kim&format=json",
    dataType: 'jsonp',
    async: false,
    data: '{"userName": "' + username + '", "Password" : "' + password + '"}',
    success: function (jsonResponse) {

      resp = parseJSON(jsonResponse);

      alert(resp);
    }
  });
}



function getJSON(k) {
  $.ajax({
    url : "http://srvwebaak01/webservice/ws_nypersondatabase/getpersonermobil/?query=jakob&format=json",
    dataType : "jsonp",
    success : function(parsed_json) {
      personArray = parsed_json.data;
      for (var i = 0; i < personArray.length; i++) {


      }
    }
  });
}

});