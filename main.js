

/*

  $(document).ready(function () {
    $(".link").click(function () {
      var idEnlace = $(this).attr("id");
      var url = 'activitats/' + idEnlace + ".html";

      $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
          $("#contenido-modal").html(data);
          $("#contenido-modal").show();
        },
        error: function (error) {
          console.log(error);
        }
      });

      $("#files").hide();
    });
  });

 */


 $(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
  const pagina = urlParams.get('pagina');

  if(pagina != null ) carrega(pagina) ; 
});



function carrega(id)
{
var url = 'activitats/' + id +".html";  

$.get(url, function(data) {
$("#contenido-modal").html(data);
 $("#contenido-modal").show();
   });
   $("#files").hide();
}

$(document).ready(function() {
$(".link").click(function() {
  var idEnlace = $(this).attr("id");
  
  carrega(idEnlace); 
  
});
}); 


function busca() {
  var paraula = $('#cerca').val();  // Recupera la paraula de la caixa del formulari 
  var data = "";  // Inicialitzem la variable que anirà creant la sortida HTML 
    $('h2 , div p').filter(function() {  // defineix sobre quin elements filtrarà sobre H2 i el P del DIV del H2 
    return $(this).text().indexOf(paraula) !== -1;  // Si la paraula esta en els elements el seu indexOf serà superior a -1 i quedarà seleccionat 
 }).each(function() {
    var div = $(this).closest('div');  // Selecciona el div que conté els elements localitzats 
    var id = div.attr('id');  // Agafa el id del div 
    var cl = div.attr('class');  //  Agafem la classe no la farem servir però podríem 
    var p = div.find('p').first().text();  // Agafa el text del p 
    var h2 = div.find('h2').text();  // Agafa el text del titol existent en el H2 
//Construiem el HTML per mostrar el resultat de la cerca 
    data  += '<div id="res" ><a href="index.html?pagina='+id+'" >' + h2 + '</a><br /><p class="trovat" >' + p + '</p></div>';
  });
  data = data + "</div>";  // Tanquem la capa oberta per mostrar resultats de cerca
  var frase = '<div id="resultat" ><p class="res" >Resultat de la cerca de la paraula : '+ paraula + '</p>' ;
  if (data == null ) {
    data = frase +  '<div id="res" > <p>No s\'ha trobat cap resultat.</p></div>';
  } else data = frase  + data  ;

  $("#contenido-modal").html(data);  // Omple la capa de contingut que esta amagada 
  $("#contenido-modal").show();   // Mostra la capa de contingut 
  $("#files").hide();   // Amaga la cap d'activitats 
}
