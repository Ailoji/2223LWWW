<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
  <?php gravar_log(); ?>
</div>
<div id="files">

  <div class="row">
    <div id="3.1" class="col link">
      <h2> 3.1- Portfoli -III </h2>
      <p>
        Incorporarem el PHP de la banda del servidor ( BACKEND),
        incorporarem variables i funcions PHP,
        modularem les pagines amb blocs : header, cos, dreta i footer,
        la visualització de continguts es farà en un format sense lateral eliminat la capa dreta,
        gravarem els accesos en un fitxer log. Incorporarem una capa informant sobre la connexió del client,
        generarem un mapa de les visites.
      </p>
      <ul>
        <a href="mapaVisi.php">
          <li>Mapa de visites</li>
        </a>
        <a href="grafics.php">
          <li>Gràfiques dels nostres visitans</li>
        </a>
      </ul>
    </div>
  </div>

  <div class="row">
    <div id="3.2" class="col link">
      <h2> 3.2.- L'estàndard RSS i la seva estructura. Llegim un RSS </h2>
      <p>El XML permet establir patrons en l'estructura dels fitxers de dades, això facilita poder intercanviar els fitxers o fer-ne lectures de tipus Web Semantica. Un dels patrons més emprat és el RSS que s'utilitza de manera especial per sindicar continguts informatius d'un portal dins d'altres portals web. Per tractar el tema a l'aula, podem partir d'una estructura simplificada tal com tenim en l'esquema següent, i desprès si és el cas aprofundir. Insistir en la importància d'explicar als alumnes que el procés "professional" a seguir, ha de passar per llegir-nos la documentació "oficial" del format i després posar-nos a crear les nostres aplicacions, però aquesta tasca ocupa molt de temps, i per tant s'escapa de les possibilitats de tractament a l'aula, de manera que cercarem "dreceres" per treballar la sindicació RSS .</p>
      <ul>
        <a href="llegir_RSS.php">
          <li>3.2.-Llegir RSS amb php </li>
        </a>
        <a href="llegir_RSSS.php">
          <li>3.2.-Llegir RSS amb JS </li>
        </a>
        <a href="llegir_RSSSS.php">
          <li>3.2.-Llegir RSS amb RAC1 </li>
        </a>
        <a href="rss.php">
          <li>3.2.1.- Crea el RSS del teu portfoli </li>
        </a>


      </ul>
    </div>
  </div>

  <div class="row">
    <div id="3.3" class="col link">
      <h2> 3.3..- El format KML </h2>
      <p>El format KML és un format utilitzat per Google per a descriure i representar informació geogràfica . Aquest format està relacionat amb altres format de tipus SIG ( Sistemes d'informació Geogràfica) com el GML i GPX. Existeix una versió del KML que està comprimit en format ZIP però es format binari , es a dir no llegible amb un editor de text que es la KMZ
        A partir de les dades geolocalitzades de la nostra BD podem generar dinàmicament un fitxer KML amb informació susceptible de ser representada en un mapa o també podem llegir les dades d'un fitxer KML i extreure'n la geolocalització del seus elements</p>
      <ul>
        <a href="mapcentres.php">
          <li> 3.3 KML : Crear un KML centres educatius
          </li>
        </a>
        <a href="mapacentres.php">
          <li>3.3b KML : Visualitzar mapa centres educatius
          </li>
        </a>
      </ul>

    </div>
  </div>

  <div class="row">
    <div id="3.4" class="col link">
      <h2>3.4.- Formats definits: Primeres passes amb el SVG </h2>
      <p>Un dels estàndard del format XML , és el estàndard SVG,(Scalable Vectorial Graphics) que correspon a un estàndard de generació de gràfics vectorials en que mitjançant l'emmagatzemament de la informació dins del llenguatge de marques XML, permet una transferència transparent entre eines i dispositius.</p>
      <ul>
        <li>3.4.1 El estàndard SVG : Gestionem Orla. </li>
        <a href="mapasvg.php">
          <li>3.4.1 El estàndard SVG : Gestionem Mapes. </li>
        </a>


      </ul>
    </div>
  </div>
  <div class="row">
    <div id="3.5" class="col link">
      <h2>3.5.--El Format Listview </h2>
      <p>Cada vegada son més necessaris els formats de visualització de tipus Responsive que s'adaptin a la mida de les pantalles, especialment les dels dispositius mòbils. Aqui teniu una proposta per crear una pagina HTML que es visualitzi en format Listview adaptada als dispositius mòbils. Podeu veure 3 propostes de temàtiques diferenciades però creades a partir de les aportacions dels cursos.</p>
      <a href="listview.html">El format Listview</a>
    </div>
  </div>
  <div class="row">
    <div id="3.6" class="col link">
      <h2>3.6 Creació d'una app client del Webservice (opcional) amb AppInventor ( Opcional) </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum repudiandae nesciunt ratione quibusdam velit provident voluptatibus voluptates unde perspiciatis rerum explicabo hic beatae, porro maiores, corporis quisquam quasi quos commodi?.</p>


    </div>
  </div>


  <?php include("lib/footer.php"); ?>