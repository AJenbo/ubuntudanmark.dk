<?php
//Include wordpress files
$wp_blog_header_path = '';
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php'))
{
    $wp_blog_header_path = $_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php';
}
    else if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php'))
{
    $wp_blog_header_path = $_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php';
}

if($wp_blog_header_path != '') {
    //Include Wordpress
    include($wp_blog_header_path);
    header("HTTP/1.0 200 OK");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="da-DK" xml:lang="da-DK">
  <head>
    <title xmlns="">Undgå internetirritation og -kriminalitet</title>
    <meta xmlns="" http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta xmlns="" name="robots" content="index,follow" />
    <link xmlns="" rel="canonical" href="http://ubuntudanmark.dk/support/" />
    <link xmlns="" rel="stylesheet" type="text/css" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/style.css" />
    <link xmlns="" rel="pingback" href="http://ubuntudanmark.dk/xmlrpc.php" />
    <link xmlns="" rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Feed" href="http://ubuntudanmark.dk/feed/" />
    <link xmlns="" rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Kommentarfeed" href="http://ubuntudanmark.dk/comments/feed/" />
    <link xmlns="" rel="stylesheet" id="nivo-slider-css" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/slider/nivo-slider.css?ver=2" type="text/css" media="all" />
    <link xmlns="" rel="stylesheet" id="openid-css" href="http://ubuntudanmark.dk/wp-content/plugins/openid/f/openid.css?ver=519" type="text/css" media="all" />
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-includes/js/jquery/jquery.js?ver=1.4.2"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/jquery.corner.js?ver=2.08"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/slider/jquery.nivo.slider.pack.js?ver=2"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-includes/js/comment-reply.js?ver=20090102"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/plugins/google-analyticator/external-tracking.min.js?ver=6.1.1"></script>
    <link xmlns="" rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ubuntudanmark.dk/xmlrpc.php?rsd" />
    <link xmlns="" rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://ubuntudanmark.dk/wp-includes/wlwmanifest.xml" />
    <link xmlns="" rel="index" title="Ubuntu Danmark" href="http://ubuntudanmark.dk/" />
    <link xmlns="" rel="prev" title="Om Ubuntu" href="http://ubuntudanmark.dk/om-ubuntu/" />
    <link xmlns="" rel="next" title="Download" href="http://ubuntudanmark.dk/download/" />
    <link xmlns="" rel="canonical" href="http://ubuntudanmark.dk/support/" />
    <link xmlns="" rel="shortcut icon" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/images/favicon.ico" type="image/x-icon" />
    <meta xmlns="" http-equiv="X-UA-Compatible" content="chrome=1" />
    <script xmlns="" type="text/javascript">
	var analyticsFileTypes = ['mp3','pdf','ogg'];
	var analyticsEventTracking = 'enabled';
</script>
    <script xmlns="" type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-3824272-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
    <link rel="home" href="index.php" title="Hold din computer sikker" />
    <link rel="up" href="index.php" title="Hold din computer sikker" />
    <link rel="prev" href="firewall.php" title="Sæt en firewall op" />
    <link rel="next" href="backup-files.php" title="Opret sikkerhedskopier af dine filer" />
  </head>
  <body class="single single-post">
    <div id="wrapper" class="hfeed">
      <div id="header">
        <div id="branding">
          <div id="blog-title">
            <span>
              <a href="http://ubuntudanmark.dk/" title="Ubuntu Danmark" rel="home">Ubuntu Danmark</a>
            </span>
          </div>
          <div id="blog-description">Danske brugere</div>
        </div>
        <div id="access">
          <div id="loco-header-menu">
            <ul id="primary-header-menu"><?php
            ob_start();
            dynamic_sidebar('primary-header-menu');
            $primary_header_menu = ob_get_clean();
            $primary_header_menu = str_replace(' menu-item-635', ' menu-item-635 current-menu-item', $primary_header_menu);
            $primary_header_menu = str_replace(' menu-item-636', ' menu-item-636 current-menu-item', $primary_header_menu);
            echo($primary_header_menu);
            ?></ul>
          </div>
        </div>
      </div>
      <div id="secondary-header">
        <div id="secondary-access">
          <div id="loco-search-form">
            <form id="searchform" method="get" action="/help/10.10/search.php">
              <div>
                <input id="s" name="s" type="text" value="" size="32" tabindex="1" />
                <input id="searchsubmit" name="searchsubmit" type="submit" value="Søg" tabindex="2" />
              </div>
            </form>
          </div>
          <div id="loco-sub-header-menu"></div>
        </div>
      </div>
      <div id="main">
        <div id="container">
          <div id="content">
            <div class="page type-page hentry" style="-moz-border-radius: 5px 5px 5px 5px;">
              <h1 class="entry-title">Undgå internetirritation og -kriminalitet</h1>
              <div class="entry-content">
                <div class="sect1" title="Undgå internetirritation og -kriminalitet">
                  <p>Fra tid til anden vil du måske modtage en e-post som indeholder en virus eller henvisninger til en forfalsket internetside. Denne type e-post er meget almindelig, og det er vigtigt at lære, hvordan man behandler disse for at forhindre at din computer eller dine personlige oplysninger bliver kompromitteret eller misbrugt.</p>
                  <p>Sådanne meddelelser modtages ofte fra totalt fremmede. Det sker dog nogle gange, at en e-post ser ud til at være fra en du kender, hvilket den i realiteten ikke er. Det er fordi, det er muligt, at inkludere en falsk afsenderadresse i e-post.</p>
                  <p>Uønsket e-post har tendens til at passe ind i en af flere kategorier:</p>
                  <div class="itemizedlist">
                    <ul class="itemizedlist" type="disc">
                      <li class="listitem">
                        <p>Spam (junk), hvor folk tilbyder uønskede tjenester og produkter</p>
                      </li>
                      <li class="listitem">
                        <p>Svindel, hvor folk lader som om, de beder om hjælp til gengæld for store pengebeløb</p>
                      </li>
                      <li class="listitem">
                        <p>Phishing, hvor beskeden ser ud til at komme fra en bank eller andre onlinetjenester, og hvor du bliver bedt om at indtaste personlige og finansielle oplysninger eller adgangskoder.</p>
                      </li>
                    </ul>
                  </div>
                  <p>Herunder er nogle tip til at sikre dig på nettet:</p>
                  <div class="itemizedlist">
                    <ul class="itemizedlist" type="disc">
                      <li class="listitem">
                        <p>Du bør aldrig besvare uønsket e-post, endsige klikke på et link i en sådan e-post. Hvis du gør det vil det normalt resultere i, at mere spam vil blive sendt til dig.</p>
                      </li>
                      <li class="listitem">
                        <p>Klik aldrig på links i e-post som fører til internetsider, som beder om din adgangskode eller lignende. Det er muligt for teksten i linket at angive en anden adresse end den (sandsynligvis farlige) adresse, som åbnes i stedet. Skriv i stedet selv linket i din browsers adressefelt og fortsæt derfra.</p>
                      </li>
                      <li class="listitem">
                        <p>Sikre dig at en webside er sikker, hvis den beder om dine finansielle oplysninger. I <span class="application"><strong>Firefox Web Browser</strong></span>, har sikre websteder en  <span class="emphasis"><em>blå</em></span> baggrund omkring ikonet til venstre for adresselinjen. Desuden er navnet på hjemmesiden, sammen med et hængelåsikon vises i nederste højre hjørne af browser-vinduet. Klik på hængelåsen for at læse mere information om sikkerheden af hjemmesiden.</p>
                      </li>
                      <li class="listitem">
                        <p>Hent og kør kun software fra kilder, du stoler på. Som standard kan du kun hente software direkte fra Ubuntu.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aside main-aside" id="secondary" style="-moz-border-radius: 5px 5px 5px 5px;">
          <ul class="xoxo">
            <li class="widgetcontainer widget" id="">
              <h3 class="widgettitle">Hold din computer sikker</h3>
              <ul>
              <li><a href="passwords.php">Adgangskoder</a></li>
              <li><a href="users.php">Tildel en separat brugerkonto til hver person</a></li>
              <li><a href="updates.php">Hold din software opdateret</a></li>
              <li><a href="lock-screen.php">Lås din skærm mens du er væk</a></li>
              <li><a href="firewall.php">Sæt en firewall op</a>
                  <ul>
                  <li><a href="firewall.php#id406848">Firewall konfigurationsværktøjer</a></li>
                  <li><a href="firewall.php#id451691">Test af firewallen og overvågning af netværkstrafik</a></li>
                  </ul>
              </li>
              <li><a href="avoid-internet-crime.php">Undgå internetirritation og -kriminalitet</a></li>
              <li><a href="backup-files.php">Opret sikkerhedskopier af dine filer</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div id="siteinfo"></div>
      </div>
    </div>
    <script type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/ubuntu-loco.js?ver=0.2-light"></script>
  </body>
</html>
