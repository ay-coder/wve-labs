define({ "api": [
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
  }
] });
