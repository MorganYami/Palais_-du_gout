var i = 0;
var data_file = "./js/commentaires.json";
var http_request = new XMLHttpRequest();

try {
  // Opera 8.0+, Firefox, Chrome, Safari
  http_request = new XMLHttpRequest();
}
catch (e) {
  // Internet Explorer Browsers
  try {
    http_request = new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch (e) {
    try {
      http_request = new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch (e) {
      // Something went wrong
      alert("Your browser broke!");
    }
  }
}

class Commentaire {
  constructor(autheur, date, com) {
    this.autheur = autheur;
    this.date = date;
    this.com = com;
  }
  remplirCommentaire() {
    var autheur = document.getElementById("autheur");
    var date = document.getElementById("date");
    var com = document.getElementById("com");
    autheur.innerHTML = this.autheur;
    date.innerHTML = this.date;
    com.innerHTML = this.com;
  }
}

function loadJSON() {
  http_request.onreadystatechange = function () {
    if (http_request.readyState == 4) {
      var jsonObj = [];
      jsonObj = JSON.parse(http_request.responseText);
      i = 0;
      var nouveauCom = new Commentaire(jsonObj[i].autheur, jsonObj[i].date, jsonObj[i].com);
      nouveauCom.remplirCommentaire();
    }
  }
  http_request.open("GET", data_file, true);
  http_request.send();
}

function nextCom() {
  http_request.onreadystatechange = function () {
    if (http_request.readyState == 4) {
      var jsonObj = [];
      jsonObj = JSON.parse(http_request.responseText);
      longJson = jsonObj.length;
      if (i < longJson - 1) {
        i++;
        var nouveauCom = new Commentaire(jsonObj[i].autheur, jsonObj[i].date, jsonObj[i].com);
        nouveauCom.remplirCommentaire();
      }
    }
  }
  http_request.open("GET", data_file, true);
  http_request.send();
}

function previousCom() {
  http_request.onreadystatechange = function () {
    if (http_request.readyState == 4) {
      var jsonObj = [];
      jsonObj = JSON.parse(http_request.responseText);
      if (i > 0) {
        i--;
        var nouveauCom = new Commentaire(jsonObj[i].autheur, jsonObj[i].date, jsonObj[i].com);
        nouveauCom.remplirCommentaire();
      }
    }
  }
  http_request.open("GET", data_file, true);
  http_request.send();
}

loadJSON();
document.getElementById('next').addEventListener('click', nextCom);
document.getElementById('previous').addEventListener('click', previousCom);
