function mail(){

  var nom = document.getElementById('nom_contenu').value;
  var objet = document.getElementById('objet_contenu').value;
  var msg = document.getElementById('msg_contenu').value;
  var sexe;
  if(document.getElementById('1').checked) sexe = 'Madame';
  if(document.getElementById('2').checked) sexe = 'Monsieur';
  if(document.getElementById('3').checked) sexe = 'Autre';
  var mailto = "mailto:dozlouka@gmail.com?subject=";
  var i;

  if(nom) document.getElementById('nom_error').innerHTML = "";
  if(objet) document.getElementById('objet_error').innerHTML = "";
  if(msg) document.getElementById('msg_error').innerHTML = "";
  if(sexe) document.getElementById('sexe_error').innerHTML = "";

  if(!nom || !objet || !msg || !sexe){

    if(!nom) document.getElementById('nom_error').innerHTML = "Complétez ce champ s\'il vous plaît.";
    if(!objet) document.getElementById('objet_error').innerHTML = "Complétez ce champ s\'il vous plaît.";
    if(!msg) document.getElementById('msg_error').innerHTML = "Complétez ce champ s\'il vous plaît.";
    if(!sexe) document.getElementById('sexe_error').innerHTML = "Complétez ce champ s\'il vous plaît.";
  }else{

    if(sexe == 'Autre') sexe = '';

    for(i = 0; i < objet.length; i++){

      if(objet.charCodeAt(i) == 10){

        mailto = mailto+" ";
      }else{

        mailto = mailto+objet[i];
      }
    }

    mailto = mailto+"&body=";

    for(i = 0; i < msg.length; i++){

      if(msg.charCodeAt(i) == 10){

        mailto = mailto+"%0D%0A";
      }else{

        mailto = mailto+msg[i];
      }
    }

    mailto = mailto+"%0D%0A"+"%0D%0A"+sexe+" ";

    for(i = 0; i < nom.length; i++){

      if(nom.charCodeAt(i) == 10){

        mailto = mailto+" ";
      }else{

        mailto = mailto+nom[i];
      }
    }

    document.location.href=mailto;
  }
}

function signalerProbleme(){

  var pb = document.getElementById('pb_contenu').value;
  var mailto = "mailto:dozlouka@gmail.com?subject=Signalement de problème sur le site http://dwarves.iut-fbleau.fr/~dozl/Louka_DOZ/";
  var i;

  if(pb) document.getElementById('pb_error').innerHTML = "";

  if(!pb){

    document.getElementById('pb_error').innerHTML = "Complétez ce champ s\'il vous plaît.";
  }else{

    mailto = mailto+"&body=";

    for(i = 0; i < pb.length; i++){

      if(pb.charCodeAt(i) == 10){

        mailto = mailto+"%0D%0A";
      }else{

        mailto = mailto+pb[i];
      }
    }

    document.location.href=mailto;
  }
}
