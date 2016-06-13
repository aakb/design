'usestrict';

/*Controllers*/

vargroupApp = angular.module('groupApp', []);

groupApp.controller('groupControl', function ($scope) {
  $scope.groups =
    [
      {
        "code": 1,
        "status": 200,
        "data": [{
          "personid": "20547",
          "azident": "aztncam",
          "email": "ankm@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "ingen",
          "stilling": "",
          "kaldenavn": "Anna Katrine Mathiassen ",
          "lokale": "Niv. 2.2",
          "kommentar": "ingen",
          "status": "updated 2016.05.18"
        }, {
          "personid": "19777",
          "azident": "az00821",
          "email": "pag@aarhus.dk ",
          "tlf1": "41858072",
          "tlf2": "ingen",
          "stilling": "Konsulent ",
          "kaldenavn": "Anne Gr\u00f8nlund Pedersen",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2015.08.04"
        }, {
          "personid": "779",
          "azident": "azkb222",
          "email": "rank@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41858078",
          "stilling": "ingen",
          "kaldenavn": "Anne Kruse Rasmussen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.22"
        }, {
          "personid": "939",
          "azident": "azkb263",
          "email": "anvh@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41854178",
          "stilling": "Afdelingsleder\t",
          "kaldenavn": "Anne Vest Hansen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.19"
        }, {
          "personid": "1741",
          "azident": "azkbd88",
          "email": "bikj@aarhus.dk",
          "tlf1": "41856556",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Birgitte Kj\u00e6rgaard",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "2225",
          "azident": "azkb253",
          "email": "cat@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Camilla T\u00e6kke",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }, {
          "personid": "2318",
          "azident": "azkb023",
          "email": "cmkaa@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41856526",
          "stilling": "ingen",
          "kaldenavn": "Carsten Michael Kaa",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.21"
        }, {
          "personid": "5325",
          "azident": "azgb159",
          "email": "ibae@aarhus.dk",
          "tlf1": "89409314",
          "tlf2": "40124695",
          "stilling": "ingen",
          "kaldenavn": "Ina B\u00e6kgaard",
          "lokale": "HB",
          "kommentar": "ingen",
          "status": "Migreret"
        }, {
          "personid": "19729",
          "azident": "az00787",
          "email": "ejm@aarhus.dk ",
          "tlf1": "41859145",
          "tlf2": "ingen",
          "stilling": "Konsulent ",
          "kaldenavn": "Johanne Mose Entwistle",
          "lokale": "G2.3",
          "kommentar": "ingen",
          "status": "updated 2015.08.12"
        }, {
          "personid": "22069",
          "azident": "az05924 ",
          "email": "jukt@aarhus.dk",
          "tlf1": "",
          "tlf2": "",
          "stilling": "Studentermedhj\u00e6lp ",
          "kaldenavn": "Julie Krogh Thomsen ",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "9202",
          "azident": "azkbc65",
          "email": "mlog@aarhus.dk",
          "tlf1": "51576796",
          "tlf2": "ingen",
          "stilling": "Udviklingskonsulent ",
          "kaldenavn": "Louise Overgaard",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2016.03.29"
        }, {
          "personid": "9969",
          "azident": "azkb029",
          "email": "mkrog@aarhus.dk",
          "tlf1": "41856550",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Marianne Krogb\u00e6k",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.02"
        }, {
          "personid": "10282",
          "azident": "azkb239",
          "email": "bumat@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "ingen",
          "stilling": "Konsulent ",
          "kaldenavn": "Matti Bugge",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2016.04.20"
        }, {
          "personid": "10813",
          "azident": "azkb212",
          "email": "mbm@aarhus.dk",
          "tlf1": "41856641",
          "tlf2": "ingen",
          "stilling": "",
          "kaldenavn": "Michelle Bach Lindstr\u00f8m",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.04.29"
        }, {
          "personid": "22125",
          "azident": "az18424 ",
          "email": "niwu@aarhus.dk",
          "tlf1": "",
          "tlf2": "",
          "stilling": "Studentermedhj\u00e6lp ",
          "kaldenavn": "Nicole W\u00fcrtz",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "11403",
          "azident": "azkb048",
          "email": "nsp@aarhus.dk",
          "tlf1": "29204360",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Niels Schmidt Petersen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.25"
        }]
      }

    ]
});

