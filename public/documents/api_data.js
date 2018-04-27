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
          "content": "{\n\"data\": [\n    {\n        \"careerId\": 1,\n        \"careerTitle\": \"Sr IOS Developer\",\n        \"careerSubTitle\": \"Min Exp 3 Yrs\",\n        \"careerExperience\": \"4-6 yr\",\n        \"careerLocation\": \"Ahmedabad India\",\n        \"careerDescription\": \"This is testing details.\",\n        \"careerIcon\": \"http://wve-labs.local/uploads/career/90416_career.jpg\"\n    }\n],\n\"status\": true,\n\"message\": \"Success\",\n\"code\": 200\n}",
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
    "type": "get",
    "url": "portfolio/",
    "title": "Portfolio",
    "name": "portfolio",
    "group": "Portfolio",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "   {\n    \"data\": [\n        {\n            \"portfolioId\": 1,\n            \"portfolioTitle\": \"Vizi App\",\n            \"portfolioSubTitle\": \"Social Network\",\n            \"portfolioAppTitle\": \"Mobile App\",\n            \"portfolioIcon\": \"http://35.154.84.230/wve-labs/public/uploads/portfolio/43443_portfolio.jpg\",\n            \"portfolioImage\": \"http://35.154.84.230/wve-labs/public/uploads/portfolio/62451_portfolio.jpg\",\n            \"portfolioBannerImage\": \"http://35.154.84.230/wve-labs/public/uploads/portfolio/21614_portfolio.jpg\",\n            \"portfolioCategory\": \"Iphone\",\n            \"portfolioIde\": \"XCode 9.0\",\n            \"portfolioFrontend\": \"Swift\",\n            \"portfolioCountry\": \"USA\",\n            \"portfolioOsVersion\": \"iOS 11+\",\n            \"portfolioBackend\": \"PHP\",\n            \"portfolioRating\": \"5\",\n            \"portfolioDescription\": \"This is test\"\n        }\n    ],\n    \"status\": true,\n    \"message\": \"Success\",\n    \"code\": 200\n}",
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
