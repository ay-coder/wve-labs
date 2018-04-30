define({ "api": [
  {
    "type": "get",
    "url": "career/",
    "title": "Career",
    "name": "career",
    "group": "Career",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n\"data\": [\n    {\n        \"careerId\": 1,\n        \"careerTitle\": \"IOS Developer\",\n        \"careerPosition\": \"Sr,\",\n        \"careerSubTitle\": \"Min Exp 3 Yrs\",\n        \"careerExperience\": \"4-6 yr\",\n        \"careerLocation\": \"Ahmedabad India\",\n        \"careerDescription\": \"This is testing details.\",\n        \"careerIcon\": \"http://wve-labs.local/uploads/career/90416_career.jpg\"\n    }\n],\n\"status\": true,\n\"message\": \"Success\",\n\"code\": 200\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": " {\n    \"error\": {\n        \"message\": \"Unable to find Career!\"\n    },\n    \"status\": false,\n    \"message\": \"No Career Found !\",\n    \"code\": 400\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "wve-input/example.js",
    "groupTitle": "Career",
    "sampleRequest": [
      {
        "url": "http://35.154.84.230/wve-labs/public/api/career/"
      }
    ]
  },
  {
    "type": "post",
    "url": "inquiry/",
    "title": "Inquiry",
    "name": "inquiry",
    "group": "Inquiry",
    "parameter": {
      "fields": {
        "Inquiry": [
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>User Name  - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "emailid",
            "description": "<p>EmailId - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "contact_number",
            "description": "<p>Contact Number - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "budget",
            "description": "<p>Budget - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "country",
            "description": "<p>Country - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "lat",
            "description": "<p>Latitude - Required</p>"
          },
          {
            "group": "Inquiry",
            "type": "string",
            "optional": false,
            "field": "long",
            "description": "<p>Longitude - Required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "    {\n    \"data\": {\n        \"message\": \"Inquiry submitted successfully !\"\n    },\n    \"status\": true,\n    \"message\": \"Success\",\n    \"code\": 200\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "{\n\"error\": {\n    \"message\": \"Something went wrong !\"\n},\n\"status\": false,\n\"message\": \"Fail to Submit Inquiry!\",\n\"code\": 400\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "wve-input/example.js",
    "groupTitle": "Inquiry",
    "sampleRequest": [
      {
        "url": "http://35.154.84.230/wve-labs/public/api/inquiry/"
      }
    ]
  },
  {
    "type": "get",
    "url": "portfolio/",
    "title": "Portfolio",
    "name": "portfolio",
    "group": "Portfolio",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "   {\n    \"data\": [\n        {\n            \"portfolioId\": 1,\n            \"portfolioTitle\": \"e\",\n            \"portfolioSubTitle\": \"klj\",\n            \"portfolioAppTitle\": \"jkl\",\n            \"portfolioIcon\": \"http://wve-labs.local/uploads/portfolio/default_icon.png\",\n            \"portfolioImage\": \"http://wve-labs.local/uploads/portfolio/default_image.png\",\n            \"portfolioBannerImage\": \"http://wve-labs.local/uploads/portfolio/default_banner_image.png\",\n            \"portfolioBackgroundImage\": \"http://wve-labs.local/uploads/portfolio/42062_portfolio.jpg\",\n            \"portfolioCategory\": [\n                \"I-Phone\",\n                \"Android\"\n            ],\n            \"portfolioCountry\": \"jkl\",\n            \"portfolioBackend\": \"jkl\",\n            \"portfolioDescription\": \"jklj\",\n            \"ios\": {\n                \"isIos\": 1,\n                \"iosIde\": \"X COde\",\n                \"iosFrontend\": \"Swift\",\n                \"iosVersion\": \"11.02\",\n                \"iosRating\": \"111.1\"\n            },\n            \"android\": {\n                \"isAndroid\": 1,\n                \"androidIde\": \"Java\",\n                \"androidFrontend\": \"AndFdy\",\n                \"androidVersion\": \"Melody\",\n                \"androidRating\": \"12\"\n            }\n        }\n    ],\n    \"status\": true,\n    \"message\": \"Success\",\n    \"code\": 200\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": " {\n    \"error\": {\n        \"message\": \"Unable to find Portfolio!\"\n    },\n    \"status\": false,\n    \"message\": \"No Portfolio Found !\",\n    \"code\": 400\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "wve-input/example.js",
    "groupTitle": "Portfolio",
    "sampleRequest": [
      {
        "url": "http://35.154.84.230/wve-labs/public/api/portfolio/"
      }
    ]
  },
  {
    "type": "get",
    "url": "press/",
    "title": "Press",
    "name": "press",
    "group": "Press",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "    {\n    \"data\": [\n        {\n            \"pressId\": 1,\n            \"pressTitle\": \"This i s Test\",\n            \"pressImage\": \"http://wve-labs.local/uploads/portfolio/75320_press.png\",\n            \"pressDescription\": \"this is testing\",\n            \"pressExtraLink\": \"google.com\"\n        }\n    ],\n    \"status\": true,\n    \"message\": \"Success\",\n    \"code\": 200\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": " {\n    \"error\": {\n        \"message\": \"Unable to find Press!\"\n    },\n    \"status\": false,\n    \"message\": \"No Press Found !\",\n    \"code\": 400\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "wve-input/example.js",
    "groupTitle": "Press",
    "sampleRequest": [
      {
        "url": "http://35.154.84.230/wve-labs/public/api/press/"
      }
    ]
  },
  {
    "type": "get",
    "url": "team/",
    "title": "Team",
    "name": "team",
    "group": "Team",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "  {\n    \"data\": [\n        {\n            \"teamId\": 2,\n            \"teamName\": \"Ankit\",\n            \"teamDesignation\": \"CTO\",\n            \"teamEmailid\": \"\",\n            \"teamLinkedin\": \"linked\",\n            \"teamImage\": \"http://wve-labs.local/uploads/team/default.png\"\n        },\n        {\n            \"teamId\": 1,\n            \"teamName\": \"Anuj\",\n            \"teamDesignation\": \"IT\",\n            \"teamEmailid\": \"er.anujjaha@gmail.com\",\n            \"teamLinkedin\": \"http://localhost/phpmyadmin/\",\n            \"teamImage\": \"http://wve-labs.local/uploads/team/93277_team.jpg\"\n        }\n    ],\n    \"status\": true,\n    \"message\": \"Success\",\n    \"code\": 200\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": " {\n    \"error\": {\n        \"message\": \"Unable to find Team!\"\n    },\n    \"status\": false,\n    \"message\": \"No Team Found !\",\n    \"code\": 400\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "wve-input/example.js",
    "groupTitle": "Team",
    "sampleRequest": [
      {
        "url": "http://35.154.84.230/wve-labs/public/api/team/"
      }
    ]
  }
] });
