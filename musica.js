$(document).ready(function() {
    // Fes la petició AJAX per obtenir les dades del webservice
    $.ajax({
      type: "GET",
      url: "https://script.google.com/macros/s/AKfycbwxCgN4fEHhMwWY1hN4OMThyow59Y6XBI21q66GPQYqxCLg3Ik-Z7it0lUHMdKsmKiO/exec",
      dataType: "xml",
      success: function(xml) {
        // Parseja la resposta XML en un objecte jQuery
        var $xml = $(xml);
  
        // Obtenir el número total de pistes
        var numPistes = $xml.find("pista").length;
  
        // Genera un índex aleatori
        var randomIndex = Math.floor(Math.random() * numPistes);
  
        // Obtenir només la pista seleccionada de manera aleatòria
        var $pista = $xml.find("pista").eq(randomIndex);
        var titol = $pista.find("Titol").text();
        var categoria = $pista.find("Categoria").text();
        var album = $pista.find("Album").text();
        var cantant = $pista.find("Cantant").text();
        var audio = $pista.find("Audio").text();
        var portada = $pista.find("Portada").text();
  
        // Crea un element HTML per mostrar la imatge de portada i afegir botons per reproduir l'àudio
        var $pistaElement = $("<div class='pista'>" +
                                "<img class= 'foto_musica'  src='" + portada + "' alt='" + titol + "'  height='230'/>" +
                                "<audio class='audio'>" +
                                  "<source src='" + audio + "' type='audio/mpeg'>" +
                                "</audio>" +
                                "<div class='controls'><br/>" +
                                  "<button class='play'><i class='fa-solid fa-play'></i>Play</button>" +
                                  "<button class='pause'>Pause</button>" +
                                  "<button class='stop'>Stop</button>" +
                                "</div>" +
                              "</div>");
  
        // Afegir el controlador d'esdeveniments per fer la reproducció, pausa i parada
        var audioElement = $pistaElement.find(".audio")[0];
        $pistaElement.find(".play").click(function() {
          audioElement.play();
        });
        $pistaElement.find(".pause").click(function() {
          audioElement.pause();
        });
        $pistaElement.find(".stop").click(function() {
          audioElement.pause();
          audioElement.currentTime = 0;
        });
  
        // Afegir el nou element a la capa de música del HTML
        $("#musica").append($pistaElement);
      }
    });
  });