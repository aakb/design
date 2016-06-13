angular.module('groupApp').controller('groupControl', [ '$scope', 'dataService',
  function ($scope, dataService) {
    // Toggle direction
    $scope.directionSelected = false;
    $scope.setDirection = function () {
      $scope.directionSelected = !$scope.directionSelected;
    };


    // Toggle image style
    $scope.imageStyleSelected = true;
    $scope.setImageStyle = function () {
      $scope.imageStyleSelected = !$scope.imageStyleSelected;
    };


    // Toggle size and spacing
    $scope.largeSpacing = false;
    $scope.setSpacing = function () {
      $scope.largeSpacing = !$scope.largeSpacing;
    };


    // Se active member (flipped)
    $scope.setActive = function (member) {
      if ($scope.memberSelected === member) {
        $scope.memberSelected = '';

      } else {
        $scope.memberSelected = member;
      }
    };

    $scope.isSelected = function (member) {
      return $scope.memberSelected === member;
    };

    $scope.groups = [{
      group: 'Ledelse',
      members: {
        "code": 1,
        "status": 200,
        "data": [{
          "personid": "1928",
          "azident": "azkbc86",
          "email": "fristed@aarhus.dk",
          "tlf1": "20142612",
          "tlf2": "ingen",
          "stilling": "CIO ",
          "kaldenavn": "Bo Fristed",
          "lokale": "K2.1",
          "kommentar": "Migreret",
          "status": "updated 2016.04.12"
        }, {
          "personid": "22323",
          "azident": "azkb104 ",
          "email": "rafr@aarhus.dk",
          "tlf1": "29208427",
          "tlf2": "31154525",
          "stilling": "",
          "kaldenavn": "Rasmus Frey ",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2016.05.23"
        }]
      }
    }, {
      group: 'ITK Design',
      members: {
        "code": 1,
        "status": 200,
        "data": [{
          "personid": "808",
          "azident": "azkbd25",
          "email": "amb@aarhus.dk",
          "tlf1": "41856563",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Anne Marie Buchardt",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "2019",
          "azident": "azkb020",
          "email": "brstj@aarhus.dk",
          "tlf1": "41858055",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Brian Stefan Jensen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "3645",
          "azident": "aztec82",
          "email": "erm@aarhus.dk",
          "tlf1": "29208597",
          "tlf2": "ingen",
          "stilling": "Ekspeditionssekret\u00e6r",
          "kaldenavn": "Erik Riis Mikkelsen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.07.01"
        }, {
          "personid": "4798",
          "azident": "aztecde",
          "email": "hcar@aarhus.dk",
          "tlf1": "41858079",
          "tlf2": "ingen",
          "stilling": "Overassistent ",
          "kaldenavn": "Helle Carlsen",
          "lokale": "ITK",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "5013",
          "azident": "azteb52",
          "email": "hgan@aarhus.dk",
          "tlf1": "41858073",
          "tlf2": "ingen",
          "stilling": "Litograf",
          "kaldenavn": "Henning Gr\u00f8nb\u00e6k Andersen",
          "lokale": "ITK",
          "kommentar": "Migreret",
          "status": "updated 2016.05.23"
        }, {
          "personid": "5726",
          "azident": "azkb038",
          "email": "jant@aarhus.dk",
          "tlf1": "41858062",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Jan Thomassen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.04.30"
        }, {
          "personid": "6179",
          "azident": "azkbd85",
          "email": "jeskr@aarhus.dk",
          "tlf1": "41858063",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Jesper Kristensen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.09.16"
        }, {
          "personid": "21172",
          "azident": "az17787",
          "email": "martr@aarhus.dk ",
          "tlf1": "41857086",
          "tlf2": "ingen",
          "stilling": "\u00d8\u009dkonomisk konsulent",
          "kaldenavn": "Maria Trier ",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2016.05.18"
        }, {
          "personid": "10216",
          "azident": "azkb022",
          "email": "mvel@aarhus.dk",
          "tlf1": "41856565",
          "tlf2": "41856565",
          "stilling": "Afdelingsleder",
          "kaldenavn": "Martin Vellerup",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.02.26"
        }, {
          "personid": "10217",
          "azident": "azkb176",
          "email": "my@aarhus.dk",
          "tlf1": "41858068",
          "tlf2": "ingen",
          "stilling": "Webudvikler ",
          "kaldenavn": "Martin Yde Granath",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "10899",
          "azident": "azkb262",
          "email": "rimi@aarhus.dk",
          "tlf1": "41858069",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Mikkel Ricky",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "22030",
          "azident": "az18371 ",
          "email": "mikst@aarhus.dk ",
          "tlf1": "",
          "tlf2": "",
          "stilling": "IT-Konsulent",
          "kaldenavn": "Mikkel Staadsen-Boesen",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "11619",
          "azident": "azkb174",
          "email": "olk@aarhus.dk",
          "tlf1": "41858071",
          "tlf2": "ingen",
          "stilling": "Kontorassistent ",
          "kaldenavn": "Olga Kr\u00f8jgaard",
          "lokale": "DOKK1 2.2",
          "kommentar": "Migreret",
          "status": "updated 2016.01.13"
        }, {
          "personid": "11840",
          "azident": "azkb264",
          "email": "perth@aarhus.dk",
          "tlf1": "41854181",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Pernille Thorsen",
          "lokale": "ITK-vest",
          "kommentar": "Migreret",
          "status": "updated 2015.05.11"
        }, {
          "personid": "13935",
          "azident": "azkbd47",
          "email": "tkv@aarhus.dk",
          "tlf1": "41858074",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Thomas Kallmoes Vestergaard",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.04.30"
        }, {
          "personid": "14466",
          "azident": "azkb207",
          "email": "tu@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "ingen",
          "stilling": "Ingeni\u00f8r",
          "kaldenavn": "Troels Ugilt Jensen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.08.27"
        }, {
          "personid": "14477",
          "azident": "azkb228",
          "email": "tug@aarhus.dk",
          "tlf1": "41858076",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Ture Gj\u00f8rup",
          "lokale": "ITK, Niveau 2.2",
          "kommentar": "Migreret",
          "status": "updated 2015.09.15"
        }]
      }

    }, {
      group: 'ITK Digital',
      members: {
        "code": 1,
        "status": 200,
        "data": [{
          "personid": "234",
          "azident": "azkb295",
          "email": "andno@aarhus.dk",
          "tlf1": "41856666",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Anders N\u00f8rregaard",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.11"
        }, {
          "personid": "1379",
          "azident": "azksbcf",
          "email": "bsej@aarhus.dk",
          "tlf1": "29204244",
          "tlf2": "29204244",
          "stilling": "ingen",
          "kaldenavn": "Bent Sejersen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.04.30"
        }, {
          "personid": "2981",
          "azident": "azkb297",
          "email": "debj@aarhus.dk",
          "tlf1": "41858081",
          "tlf2": "ingen",
          "stilling": "",
          "kaldenavn": "Dennis Borup Jakobsen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "4032",
          "azident": "azkba13",
          "email": "gba@aarhus.dk",
          "tlf1": "29204289",
          "tlf2": "ingen",
          "stilling": "Projektleder for Mit Bibliotek",
          "kaldenavn": "Gitte Barlach",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }, {
          "personid": "7617",
          "azident": "azkbb01",
          "email": "ksm@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41856664",
          "stilling": "IT-supporter",
          "kaldenavn": "Klavs Skovgaard Madsen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }, {
          "personid": "25734",
          "azident": "az19284 ",
          "email": "wemi@aarhus.dk",
          "tlf1": "",
          "tlf2": "",
          "stilling": "IT-medarbejder",
          "kaldenavn": "Michael Weber ",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "11418",
          "azident": "azkba04",
          "email": "nop@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41856500",
          "stilling": "IT-supporter",
          "kaldenavn": "Niels-Ove Pedersen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.10.14"
        }, {
          "personid": "11721",
          "azident": "azkba11",
          "email": "pkf@aarhus.dk",
          "tlf1": "89409422",
          "tlf2": "29204323",
          "stilling": "Afdelingsleder",
          "kaldenavn": "Per Kj\u00e6r",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }, {
          "personid": "13180",
          "azident": "azkba15",
          "email": "sgl@aarhus.dk",
          "tlf1": "41856681",
          "tlf2": "ingen",
          "stilling": "IT-medarbejder",
          "kaldenavn": "Steen Gert Larsen",
          "lokale": "G2.3",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "14253",
          "azident": "azkbac8",
          "email": "toa@aarhus.dk",
          "tlf1": "41856600",
          "tlf2": "ingen",
          "stilling": "IT-supporter",
          "kaldenavn": "Tommy Tr\u00e6rup Andersen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }, {
          "personid": "14265",
          "azident": "azkb929",
          "email": "tj@aarhus.dk",
          "tlf1": "ingen",
          "tlf2": "41856699",
          "stilling": "Afdelingsleder",
          "kaldenavn": "Tonny Jensen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.31"
        }]
      }
    }, {
      group: 'ITK Lab',
      members: {
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
        }, {
          "personid": "14262",
          "azident": "aztst40",
          "email": "toan@aarhus.dk",
          "tlf1": "41856657",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Tonny Andersen",
          "lokale": "Grupperum 2.3",
          "kommentar": "Migreret",
          "status": "updated 2015.07.07"
        }]
      }
    }, {
      group: 'ITK Medier',
      members: {
        "code": 1,
        "status": 200,
        "data": [{
          "personid": "530",
          "azident": "azkbb07",
          "email": "ahs@aarhus.dk",
          "tlf1": "41858006",
          "tlf2": "ingen",
          "stilling": "Kontorassistent ",
          "kaldenavn": "Ann Hummeluhr Sloth",
          "lokale": "ingen",
          "kommentar": "ingen",
          "status": "updated 2016.06.13"
        }, {
          "personid": "2043",
          "azident": "azkb219",
          "email": "skbr@aarhus.dk",
          "tlf1": "41858056",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Britt Skjoldborg",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.18"
        }, {
          "personid": "3591",
          "azident": "azkb296",
          "email": "emmal@aarhus.dk",
          "tlf1": "41858082",
          "tlf2": "ingen",
          "stilling": "Konsulent ",
          "kaldenavn": "Emma Alnor",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.06.07"
        }, {
          "personid": "4471",
          "azident": "azkbb60",
          "email": "hrj@aarhus.dk",
          "tlf1": "41858059",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Hanne Rene J\u00f8rgensen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "24078",
          "azident": "az19036 ",
          "email": "hescn@aarhus.dk ",
          "tlf1": "",
          "tlf2": "",
          "stilling": "Konsulent ",
          "kaldenavn": "Heidi Schmidt Nissen",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "6953",
          "azident": "azkbd69",
          "email": "karlu@aarhus.dk",
          "tlf1": "41856525",
          "tlf2": "41856525",
          "stilling": "ingen",
          "kaldenavn": "Karin Lund",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.06"
        }, {
          "personid": "7601",
          "azident": "azkbb94",
          "email": "kht@aarhus.dk",
          "tlf1": "41858064",
          "tlf2": "ingen",
          "stilling": "ingen",
          "kaldenavn": "Klaus Holk Thomsen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "8126",
          "azident": "azkba67",
          "email": "lkf@aarhus.dk",
          "tlf1": "41858065",
          "tlf2": "ingen",
          "stilling": "Bibliotekar",
          "kaldenavn": "Lene Frandsen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2015.05.12"
        }, {
          "personid": "8711",
          "azident": "azkba83",
          "email": "aso@aarhus.dk",
          "tlf1": "41858067",
          "tlf2": "ingen",
          "stilling": "Overassistent ",
          "kaldenavn": "Lise Br\u00f8nd",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "9805",
          "azident": "azkb016",
          "email": "msar@aarhus.dk",
          "tlf1": "40228660",
          "tlf2": "40228660",
          "stilling": "ingen",
          "kaldenavn": "Maria Sofie Aleberg Rousing",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "updated 2016.05.19"
        }, {
          "personid": "24077",
          "azident": "az19035 ",
          "email": "nikb@aarhus.dk",
          "tlf1": "",
          "tlf2": "",
          "stilling": "Konsulent ",
          "kaldenavn": "Niels Kern Bertelsen",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "24103",
          "azident": "az19053 ",
          "email": "marik@aarhus.dk ",
          "tlf1": "",
          "tlf2": "",
          "stilling": "Konsulent ",
          "kaldenavn": "Rikke Maltesen",
          "lokale": "",
          "kommentar": "ingen",
          "status": "oprettet"
        }, {
          "personid": "13479",
          "azident": "azkba78",
          "email": "siv@aarhus.dk",
          "tlf1": "89409440",
          "tlf2": "29208036",
          "stilling": "ingen",
          "kaldenavn": "Susanne Iversen",
          "lokale": "ingen",
          "kommentar": "Migreret",
          "status": "Migreret"
        }]
      }
    }]
  }
]);
