<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>

<div  class="row justify-content-center mt-5">    <h1>El món a RAC1 - El davantal</h1>
    <ul id="podcasts">
    </ul></div>

<script type="text/javascript">
const RSS_URL = "rac1_podcast_davantal.rss";
      const podcastsList = document.getElementById("podcasts");

      fetch(RSS_URL)
        .then(response => response.text())
        .then(xml => {
          const parser = new DOMParser();
          const xmlDoc = parser.parseFromString(xml, "text/xml");

          const items = xmlDoc.getElementsByTagName("item");

          for (let i = 0; i < items.length; i++) {
            const item = items[i];
            const title = item.getElementsByTagName("title")[0].textContent;
            const description = item.getElementsByTagName("description")[0].textContent;
            const link = item.getElementsByTagName("link")[0].textContent;
            const pubDate = new Date(item.getElementsByTagName("pubDate")[0].textContent);
            const duration = item.getElementsByTagName("itunes:duration")[0].textContent;

            const podcastItem = document.createElement("li");

            const podcastTitle = document.createElement("h2");
            podcastTitle.textContent = title;

            const podcastDescription = document.createElement("p");
            podcastDescription.textContent = description;


           
            const podcastListenButton = document.createElement("audio");
            podcastListenButton.controls = true;

            const audioSrc = document.createElement("source");
            audioSrc.src = item.getElementsByTagName("enclosure")[0].getAttribute("url");
            audioSrc.type = item.getElementsByTagName("enclosure")[0].getAttribute("type");

            podcastListenButton.appendChild(audioSrc);

            podcastItem.appendChild(podcastTitle);
            podcastItem.appendChild(podcastDescription);

            podcastItem.appendChild(podcastListenButton);

            podcastsList.appendChild(podcastItem);
          }
        });
    </script>

<?php include("lib/footer.php"); ?>

