<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
  <?php gravar_log(); ?>
</div>
<div id="files">

  <div class="row">
    <div id="1.1" class="col link">
      <h2> 1.1 Portfoli 1 </h2>
      <p>En aquesta unitat hi afegirem els següents
        elements : metadades bàsiques i Metadades Open Graph,
        llibreria Bootstrap per temes de disseny,
        llibreria Jquery de gestió amb Javascript </p>
      <ul>
        <li>1.1.1 .- Metadades</li>
        <ul>
          <li>1.1.1.2 .- SEO Metadades generals i Open Graph</li>
          <li>1.1.1.3 .- Metadades d'imatges</li>
        </ul>
        <li>1.1.2 .- Apliquem les llibreries Jquery i Bootstrap al nostre portfoli</li>
      </ul>
    </div>


  </div>
  <div class="row">
    <div id="1.2" class="col link">
      <h2> 1.2 .- El perquè emprem el format XML Pàgina </h2>
      <p>Seguint les etiquetes que es fan servir en l'exemple, crea un XML a partir de la següent recepta del
        canapés.</p>
      <ul>
        <a href="receptes/receptac.xml">
          <li> 1.2 .- El perquè emprem el format XML Pàgina </li>
        </a>

        <li> 1.2.1 .- Parser: Esquema d'un fitxer XML Pàgina
        </li>
        <li> 1.2.2 .- Anàlisi i validació del fitxer XML - Recepta Pàgina
        </li>
        <li> 1.2.3.- Definició de les dades. Document DTD Pàgina
        </li>
        <li> 1.2.4 .- Definició de les dades. Document XSD Schema Pàgina
        </li>

      </ul>
    </div>


  </div>
  <div class="row">
    <div id="1.3" class="col link">
      <h2> 1.3.- Utilitzem el format XML Pàgina
      </h2>
      <p> Ara que ja coneixem les característiques que ha de tenir un fitxer XML i que ja l'hem creat manualment ,
        anirem a treballar amb fitxers en format XML des de 2 àmbits
      </p>
      <ul>

        <a href="generemfichers.php">
          <li> 1.3.1.-Fase A .- Creació de fitxers XML Pàgina </li>
        </a>

        <a href="llegimfichers.php">
          <li> 1.3.2.- Fase B .- Lectura de fitxers XML Pàgina </li>
        </a>



      </ul>
    </div>

  </div>


  <div class="row">
    <div id="1.4" class="col link">
      <h2> 1.4 .- Transformació XML / XSLT / XPATH Pàgina
      </h2>
      <p> Aquesta activitat és d'informació per agafar conceptes sobre XSLT i XPATH
      </p>
      <ul>
        <a href="receptes/recepta.xml">
          <li> 1.4.1 .- Fem la primera plantilla XSLT Pàgina
          </li>
        </a>
        <li> 1.4.2 .- Fem la nostra plantilla XSLT des de zero
        </li>


      </ul>
    </div>


  </div>


  <?php include("lib/footer.php"); ?>