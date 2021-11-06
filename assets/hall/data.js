var APP_DATA = {
  "scenes": [
    {
      "id": "0-home",
      "name": "Home",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "yaw": 0.04574988661776658,
        "pitch": 0.043301210238471555,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 0.0017274521706269752,
          "pitch": 0.055309236910566995,
          "rotation": 0,
          "target": "2-resepsionis",
          "add": "emailmodal"
        }
      ],
      "infoHotspots": [
        {}
      ]
    },
    {
      "id": "1-banner",
      "name": "Banner",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1750,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.3708999877327344,
          "pitch": 0.30104462088890926,
          "rotation": 0,
          "target": "2-resepsionis"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-resepsionis",
      "name": "Resepsionis",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1750,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.0245066539344577,
          "pitch": 0.43235688791777953,
          "rotation": 0,
          "target": "3-ruang1-1",
          "label":"Masuk Hall"
        },
        {
          "yaw": 1.116984385119256,
          "pitch": 0.23738357462055149,
          "rotation": 0,
          "target": "1-banner"
        },
        {
          "yaw": 2.747239703573868,
          "pitch": -0.007786041546429701,
          "rotation": 0,
          "target": "0-home"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -0.5009091055044732,
          "pitch": 0.02612292863270319,
          "title": "List Event",
          "text": "List Event",
          "type": "event",
          "link": "virtualfair.ub.ac.id/home/event"
        },
        {
          "yaw": 0.5020872014368911,
          "pitch": 0.03070062541620281,
          "title": "Tutorial Pendaftaran",
          "text": "Tutorial Pendaftaran",
          "type": "tutorial",
          "link": "virtualfair.ub.ac.id/home/tutorial"
        },
        {
          "yaw": 0.005996168876355133,
          "pitch": -0.028093557323404355,
          "title": "Youtube Rektor",
          "text": "Text",
          "add": "youtube",
          "add2": "youtube-rektor"
        }
      ]
    },
    {
      "id": "3-ruang1-1",
      "name": "Ruang1-1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.020126316089626783,
          "pitch": 0.26571517266570055,
          "rotation": 0,
          "target": "4-ruang1-2"
        },
        {
          "yaw": -3.132065420048889,
          "pitch": 0.11846939556007463,
          "rotation": 0,
          "target": "2-resepsionis"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.463055899749449,
          "pitch": 0.1539510640616939,
          "title": "PT. ANABATIC DIGITAL RAYA",
          "text": "Anabatic Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20ANABATIC%20DIGITAL%20RAYA"
        },
        {
          "yaw": -1.6385673183569551,
          "pitch": 0.2611752227957851,
          "title": "ASIAN AGRI",
          "text": "Asian Agri Sub",
          "link": "virtualfair.ub.ac.id/company/ASIAN%20AGRI"
        },
        {
          "yaw": -0.7584242227561226,
          "pitch": 0.20535439277523615,
          "title": "PT. ASTRA INTERNATIONAL DAIHATSU",
          "text": "Astra Daihatsu Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20ASTRA%20INTERNATIONAL%20DAIHATSU"
        },
        {
          "yaw": 0.6478393935000692,
          "pitch": 0.15614965534173209,
          "title": "PT. KRISBOW INDONESIA",
          "text": "Krisbow Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20KRISBOW%20INDONESIA"
        },
        {
          "yaw": 1.381719866247991,
          "pitch": 0.2604785082669814,
          "title": "PT. MALINDO FEEDMILL",
          "text": "Malindo Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20MALINDO%20FEEDMILL"
        },
        {
          "yaw": 2.294630739859784,
          "pitch": 0.2081540215820432,
          "title": "PT. MAS SUMBIRI",
          "text": "Mas Sumbiri Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20MAS%20SUMBIRI"
        }
      ]
    },
    {
      "id": "4-ruang1-2",
      "name": "Ruang1-2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.01754146667747669,
          "pitch": 0.06733354155532112,
          "rotation": 0,
          "target": "5-ruang2-1"
        },
        {
          "yaw": 3.1182434385591726,
          "pitch": 0.25787925107021437,
          "rotation": 0,
          "target": "3-ruang1-1"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -1.931215817023464,
          "pitch": 0.21468257710103344,
          "title": "PT. BANK CENTRAL ASIA",
          "text": "BCA Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20BANK%20CENTRAL%20ASIA"
        },
        {
          "yaw": -0.9366354362325424,
          "pitch": 0.18929914475498322,
          "title": "PT. BFI FINANCE INDONESIA",
          "text": "BFI Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20BFI%20FINANCE%20INDONESIA"
        },
        {
          "yaw": 0.760332679757532,
          "pitch": 0.16855984593965623,
          "title": "PT. CYBERINDO ADITAMA",
          "text": "CBN Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20CYBERINDO%20ADITAMA"
        },
        {
          "yaw": 1.5864634775460882,
          "pitch": 0.25387435230816635,
          "title": "KALBE NUTRITIONALS",
          "text": "Kalbe Sub",
          "link": "virtualfair.ub.ac.id/company/KALBE%20NUTRITIONALS"
        }
      ]
    },
    {
      "id": "5-ruang2-1",
      "name": "Ruang2-1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 3.117566444265309,
          "pitch": 0.0983182128315434,
          "rotation": 0,
          "target": "4-ruang1-2"
        },
        {
          "yaw": 0.0036547204408705625,
          "pitch": 0.21504747256828693,
          "rotation": 0,
          "target": "6-ruang2-2"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.4412057165561265,
          "pitch": 0.16061495061843978,
          "title": "PT. METRODATA ELECTRONICS",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Metrodata sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20METRODATA%20ELECTRONICS"
        },
        {
          "yaw": -1.696157103434178,
          "pitch": 0.2707450617652345,
          "title": "PT. CITRA TUBINDO",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Citra Tubindo sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20CITRA%20TUBINDO"
        },
        {
          "yaw": -0.8081390636696124,
          "pitch": 0.18711427087409227,
          "title": "PT. SUPARMA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Suparma</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20SUPARMA"
        },
        {
          "yaw": 0.6937724478927354,
          "pitch": 0.15394820465665582,
          "title": "PT. SASA INTI",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Sasa sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20SASA%20INTI"
        },
        {
          "yaw": 1.3520876488357807,
          "pitch": 0.23753845101346371,
          "title": "ASTRA CREDIT COMPANIES",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Astra ACC sub</span><br>",
          "link": "virtualfair.ub.ac.id/company/ASTRA%20CREDIT%20COMPANIES"
        },
        {
          "yaw": 2.289884235087327,
          "pitch": 0.16537343131373916,
          "title": "SAMSUNG RESEARCH INDONESIA",
          "text": "Samsung Sub",
          "link": "virtualfair.ub.ac.id/company/SAMSUNG%20RESEARCH%20INDONESIA"
        }
      ]
    },
    {
      "id": "6-ruang2-2",
      "name": "Ruang2-2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.011728150011093064,
          "pitch": 0.0875420953116155,
          "rotation": 0,
          "target": "7-ruang3-1"
        },
        {
          "yaw": 3.1272854828281877,
          "pitch": 0.21303182602862059,
          "rotation": 0,
          "target": "5-ruang2-1"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -1.5345939389603664,
          "pitch": 0.1958085196266719,
          "title": "PT. WOM FINANCE",
          "text": "WOM Finance Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20WOM%20FINANCE"
        },
        {
          "yaw": -0.7210827475106836,
          "pitch": 0.1434225827329314,
          "title": "SINAR BAJA ELECTRIC",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Sinar Baja sub</span>",
          "link": "virtualfair.ub.ac.id/company/SINAR%20BAJA%20ELECTRIC"
        },
        {
          "yaw": 0.6206911166085725,
          "pitch": 0.13764284639054836,
          "title": "PT. ASURANSI SINAR MAS",
          "text": "Sinarmas Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20ASURANSI%20SINAR%20MAS"
        },
        {
          "yaw": 1.2692302483023816,
          "pitch": 0.21720203324808196,
          "title": "BANK RAKYAT INDONESIA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">BRI sub</span>",
          "link": "virtualfair.ub.ac.id/company/BANK%20RAKYAT%20INDONESIA"
        }
      ]
    },
    {
      "id": "7-ruang3-1",
      "name": "Ruang3-1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -3.1272416431667747,
          "pitch": 0.099324910721176,
          "rotation": 0,
          "target": "6-ruang2-2"
        },
        {
          "yaw": 0.003797819321651019,
          "pitch": 0.3205260321451586,
          "rotation": 0,
          "target": "8-ruang3-2"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.4889471752478443,
          "pitch": 0.16297375974557582,
          "title": "PT. STEEL PIPE INDUSTRI",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT SPINDO sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20STEEL%20PIPE%20INDUSTRI"
        },
        {
          "yaw": -1.8233574728308088,
          "pitch": 0.2233698019748509,
          "title": "PT. TORRECID INDONESIA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT TORRECID sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20TORRECID%20INDONESIA"
        },
        {
          "yaw": -0.8671763858938881,
          "pitch": 0.2129449262242975,
          "title": "PT. HARTONO ISTANA TEKNOLOGI",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Polytron sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20HARTONO%20ISTANA%20TEKNOLOGI"
        },
        {
          "yaw": 2.393103672206891,
          "pitch": 0.1814878066799075,
          "title": "PT. WINGS SURYA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Wings sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20WINGS%20SURYA"
        },
        {
          "yaw": 1.548361934475433,
          "pitch": 0.24558111850362252,
          "title": "PT. SARIGUNA PRIMATIRTA",
          "text": "PT Tanobel sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20SARIGUNA%20PRIMATIRTA"
        },
        {
          "yaw": 0.7208783457979795,
          "pitch": 0.18601591485590419,
          "title": "PT. SURYA MADISTRINDO",
          "text": "PT Surya Madistrindo Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20SURYA%20MADISTRINDO"
        }
      ]
    },
    {
      "id": "8-ruang3-2",
      "name": "Ruang3-2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 3.1264351485548207,
          "pitch": 0.29646831920134886,
          "rotation": 0,
          "target": "7-ruang3-1"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.0002772820706465,
          "pitch": 0.20361688652428178,
          "title": "PT Rimba Kencana",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Rimba Kencana sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20RIMBA%20KENCANA"
        },
        {
          "yaw": -0.9973297209843714,
          "pitch": 0.23422543007880137,
          "title": "PT. SANTOS JAYA ABADI",
          "text": "PT Santos Jaya Abadi Sub",
          "link": "virtualfair.ub.ac.id/company/PT.%20SANTOS%20JAYA%20ABADI"
        },
        {
          "yaw": -0.16028617163602732,
          "pitch": 0.1949410075817859,
          "title": "PT. MEDION FARMA JAYA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">PT Medion sub</span>",
          "link": "virtualfair.ub.ac.id/company/PT.%20MEDION%20FARMA%20JAYA"
        },
        {
          "yaw": 0.8287343418854505,
          "pitch": 0.17437926519341929,
          "title": "BINUS UNIVERSITY",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Binus University sub</span>",
          "link": "virtualfair.ub.ac.id/company/BINUS%20UNIVERSITY"
        },
        {
          "yaw": 1.6935433865600293,
          "pitch": 0.25464332652019195,
          "title": "BINA NUSANTARA",
          "text": "<span style=\"font-size: 16px; background-color: rgba(103, 115, 131, 0.8);\">Bina Nusantara sub</span>",
          "link": "virtualfair.ub.ac.id/company/BINA%20NUSANTARA"
        }
      ]
    }
  ],
  "name": "virtual fair",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": true,
    "fullscreenButton": false,
    "viewControlButtons": false
  }
};
