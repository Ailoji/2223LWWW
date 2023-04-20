<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
  <?php gravar_log(); ?>
</div>
<div id="files">

  <div class="row">
    <div id="2.1" class="col link">
      <h2> 2.0.- Portfoli -II </h2>
      <p>
        Afegirem una columna lateral emprant Bootstrap i afegirem més files, incorporarem la lectura de paràmetres
        en l'accés a la web, que permetin accedir a una activitat concreta des de l'exterior
        , afegirem un cercador intern aprofitant emprant l'estructura del DOM i les possibilitats del XPATH
        , afegirem l'accés via JSON a un servei web sobre el temps meteorològic
        , afegirem l'accés via XML a un servei web propi sobre Musica .</p>
      <ul>
        <li>2.0.1 - Canvis estructurals al portfoli </li>
        <li>2.0.2 - Afegim un cercador intern del DOM amb XPATH </li>
        <li>2.0.3 - Implementem accés a un webservice amb JQUERY </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div id="2.2" class="col link">
      <h2> 2.1.- Introducció als fitxers JSON. Concepte </h2>
      <p>En l'activitat 0.4.2 ja vàrem veire quina estructura tenia un fitxer JSON. Ara en aquesta unitat 2
        coneixerem una mica dels aspectes més teorics sobre aquest format, i ens centrarem en analitzar les seves
        possibilitats i aplicar exemples pràctics del seu ús.</p>
      <ul>
        <li><a name="" id="" href="https://script.googleusercontent.com/a/macros/xtec.cat/echo?user_content_key=Dti2Tln9T4pVZdjPHiyAkJhuRYyanrUG9u4KFaghWGRrSqGdLMEDkYa9qIBDNsdzZqZXV6oS_5A_kAt7KGlXiSwK41GhDtl_m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_nRPgeZU6HP_ERLms-ofpdHxSbRHB28LELrpe8SCTfuixX7ezDFFdeyJxi6UNXE8emGaVDUHgj-DOBkM55K3T2ViRDToEq-_pBROzk4cGWU89KoAUo615ZZLpGNoPB3_LmoEBJ3qF9sE&lib=MzSpXFKu3eZEQC8WJcRlEliZrDaw7s3jo" role="button">2.1.1 .- Generem el fitxer JSON de les nostres dades amb GAS </a> </li>
        <li>2.1.2 .- Un exemple amb GeoJSON
          <ul>
            <li><a name="" id="" href="mapa.php" role="button">Mapa pavellos ACB </a> </li>

            <li><a name="" id="" href="pavellon.php" role="button">aqui podras veure geoJSON </a> </li>

          </ul>
        </li>

      </ul>
    </div>
  </div>

  <div class="row">
    <div id="2.3" class="col link">
      <h2> 2.2- Utilitzem el format JSON
      </h2>
      <p>Ara que ja coneixem les característiques que ha de tenir un fitxer JSON i que ja l'hem creat manualment ,
        anirem a treballar amb fitxers en format JSON des de 2 àmbits :

        A.- La creació d'un fitxer JSON programant el codi que utilitzi les dades contingudes en una Base de dades .
        B.- Lectura d'un fitxer JSON també emprant una aplicació creada per visualitzar de manera personal, les
        dades con tingudes en el fitxer.</p>
      <ul>
        <li> 2.2.1.-Fase A .- Creació de fitxers JSON
          <ul>
            <li>
              <a name="" id="" href="acb.php" role="button">Fitxer JSON</a>
            </li>
            <li>
              <a name="" id="" href="taulaacb.php" role="button">Creacio de una taula a partir de el JSON</a>
            </li>
          </ul>
        </li>
        <li> 2.2.2.- Fase B .- Lectura de fitxers JSON 🔺
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div id="2.4" class="col link">
      <h2> 2.3.- Una aplicació amb JSON: Programació d'un XatBot a Telegram
      </h2>
      <p>En aquesta unitat que estem revisant la utilització dels llenguatges de marques en aplicacions concretes ,
        farem una petita incursió al mon dels xatbots, que majoritariament utilitzen JSON en les seves
        comunicacions. Aprofitarem la facilitat que ofereix Telegram per crear i gestionar un xatbot per aprendre de
        la gestió del format JSON </p>
      <ul>
        <li>2.3.1- Registre del xatBot de Telegram amb BotFather
        </li>
        <li><a name="" id="" href="https://t.me/alojitest_bot" role="button">
            2.3.2. Programant el primer xatbot de Telegram</a>
        </li>
      </ul>
    </div>
  </div>



  <?php include("lib/footer.php"); ?>