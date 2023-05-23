<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
  <?php gravar_log(); ?>
</div>
<div id="files">
  <div class="row">
    <div id="4.1" class="col link">
      <h2>4.0.1 .- Incorporem bases de dades al portfoli </h2>
      <p>
      Farem webscraping del nostre portfoli actual i passarem el contingut a XML i MySQL, i modificarem el portfoli per què llegeixi les activitats de les bases de dades sigui XML o MySQL, i crearem un mòdul al portfoli per poder afegir el contingut a les Bases de dades
      </p>
    </div>
  </div>

  <div class="row">
    <div id="4.2" class="col link">
      <h2>4.0.2 .- Incorporació de continguts aliens : web scraping </h2>
      <p>
      Incorporació de la foto del dia de la NASA emprant un RSS de la pròpia NASA , enprant PHP, i incorporació de informació de l'agenda del diari "El Punt Avui" emprant Javascript amb XPATH 
      </p>
    </div>
  </div>

  <div class="row">
    <div id="4.3" class="col link">
      <h2>4.03.- Apliquem transformacó XSLT al nostre portfoli </h2>
      <p>
      En aquesta activitat es tractaria de que ja que tenim el fitxer XML amb les activitats , podem generar una o mes plantilles per visualitzar la informació sense tenir que actuar de  manera manual dins del codi HTML del portfoli 
      </p>
    </div>
  </div>

  <div class="row">
    <div id="4.4" class="col link">
      <h2>4.1 .- Web Scraping </h2>
      <p>
      En aquesta activitat heu d'implementar una captura de contingut d'una web aliena, amb tecnologia "web scraping" emprant XPATH  i implementar-la en el vostre servidor o al vostre portfoli. 
      </p>
      <ul>
        <a href="https://docs.google.com/spreadsheets/d/1F3uUNKuwTQvthsDMAUHcG_vm4YeIK71VuK7xI3aVlo0/edit?usp=share_link">
        <li>Excel cotització dolar</li></a>
        <a href="https://colab.research.google.com/drive/1r2hTAZ_NPAuzITnrC6K98M9F1yBO1LVs?usp=sharing"><li>Google colab Cripto monedes</li></a>
      </ul>
    </div>
  </div>

  <div class="row">
    <div id="4.5" class="col link">
      <h2>4.2.- Introducció als WebSservices SOAP i WSDL </h2>
      <p>
      Testejar el servei web SOAP creat amb la BD e Minerals  i crear una aplicació php per llegir les dades d'un determinat mineral que podem anar canviant el seu nom  
      </p>
    </div>
  </div>

  <div class="row">
    <div id="4.6" class="col link">
      <h2>4.2.1.- [opcional] Creació del nostre WSDL</h2>
      <p>
      En aquesta activitat opcional, la proposta consisteix en crear un propi servei web SOAP. Teniu les pautes per la seva creació i especialment podeu comptar amb l'ajuda de ChatGPT que en aquest cas serà molt valiosa . 
      </p>
      <ul>
        <li>
          <a href="soap.php">Soap WSDL</a>
        </li>
      </ul>
    </div>
  </div>



</div>
<?php include("lib/footer.php"); ?>