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
    <title>Arbejde med hardware-enheder</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="theme-color" content="#dd4814" />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="/support/" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/light-wordpress-theme/style.css" />
    <link rel="pingback" href="/xmlrpc.php" />
    <link rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Feed" href="/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Kommentarfeed" href="/comments/feed/" />
    <link rel="stylesheet" type="text/css" media="print" href="/wp-content/themes/light-wordpress-theme/print.css" />
    <script async="true" type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script async="true" type="text/javascript" src="/wp-includes/js/comment-reply.js?ver=20090102"></script>
    <script async="true" type="text/javascript" src="/wp-content/plugins/google-analyticator/external-tracking.min.js?ver=6.1.1"></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
    <link rel="index" title="Ubuntu Danmark" href="/" />
    <link rel="prev" title="Om Ubuntu" href="/om-ubuntu/" />
    <link rel="next" title="Download" href="/download/" />
    <link rel="canonical" href="/support/" />
    <link rel="shortcut icon" href="/wp-content/themes/light-wordpress-theme/images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <script async="true" type="text/javascript">
	var analyticsFileTypes = ['mp3','pdf','ogg'];
	var analyticsEventTracking = 'enabled';
</script>
    <script async="true" type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-3824272-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
    <link rel="home" href="index.php" title="Arbejde med hardware-enheder" />
    <link rel="next" href="jockey.php" title="Proprietære drivere" />
  </head>
  <body class="single single-post">
    <div id="wrapper" class="hfeed">
      <div id="header">
        <div id="branding">
          <div id="blog-title">
            <span>
              <a href="/" title="Ubuntu Danmark" rel="home">Ubuntu Danmark</a>
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
            $primary_header_menu = str_replace(' menu-item-637', ' menu-item-637 current-menu-item', $primary_header_menu);
            echo($primary_header_menu);
            ?></ul>
          </div>
        </div>
      </div>
      <div id="secondary-header">
        <div id="secondary-access">
          <div id="loco-search-form">
            <form id="searchform" method="get" action="/help/10.04/search.php">
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
              <h1 class="entry-title">Arbejde med hardware-enheder</h1>
              <div class="entry-content">
                <div xml:lang="da" class="article" title="Arbejde med hardware-enheder" lang="da">
                  <p>Din computer består af en mængde forbundne enheder, som tilsammen kaldes computer-<span class="emphasis"><em>hardware</em></span>.</p>
                  <p>Ubuntu konfigurerer normalt din hardware automatisk, men der kan være tilfælde, hvor du skal selv skal foretage ændringer i hardwareindstillingerne. Dette afsnit giver information om værktøjer, som kan bruges til at konfigurere din hardware.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aside main-aside" id="secondary" style="-moz-border-radius: 5px 5px 5px 5px;">
          <ul class="xoxo">
            <li class="widgetcontainer widget" id="">
              <h3 class="widgettitle">Arbejde med hardware-enheder</h3>
              <ul>
              <li><a href="jockey.php">Proprietære drivere</a>
                  <ul>
                  <li><a href="jockey.php#jockey-whyproprietary">Hvorfor er nogle drivere proprietære?</a></li>
                  <li><a href="jockey.php#jockey-enable">Aktivering af en proprietær driver</a></li>
                  <li><a href="jockey.php#jockey-disable">Deaktivering af en proprietær driver</a></li>
                  </ul>
              </li>
              <li><a href="disks.php">Diske og partitioner</a>
                  <ul>
                  <li><a href="disks.php#checking-usage">Undersøg hvor meget diskplads der er tilgængelig</a></li>
                  <li><a href="disks.php#free-disk-space">Hvordan kan jeg frigøre noget diskplads?</a></li>
                  <li><a href="disks.php#partitioning-device">Partitionering af en enhed</a></li>
                  <li><a href="disks.php#partition-formatting">Formatering af en partition</a></li>
                  <li><a href="disks.php#to-format-meaning">Hvad er formatering?</a></li>
                  <li><a href="disks.php#what-is-filesystem">Hvad er et filsystem?</a></li>
                  <li><a href="disks.php#partition-meaning">Hvad er en partition?</a></li>
                  <li><a href="disks.php#mount-and-umount">Montering og afmontering af enheder</a></li>
              <li><a href="laptops.php">Bærbare computere</a>
                  <ul>
                  <li><a href="laptops.php#laptops-pm">Strømstyringsindstillinger</a></li>
                  <li><a href="laptops.php#laptops-touchpads">Museplader</a></li>
                  <li><a href="laptops.php#laptops-testing-reports">Find testrapporter for bærbare computere</a></li>
                  </ul>
              </li>
              <li><a href="pm-suspending.php">Sæt din computer i hvile eller dvale</a>
                  <ul>
                  <li><a href="pm-suspending.php#pm-suspend-hibernate-fails">Min computer går ikke korrekt i hvile eller dvale</a></li>
                  <li><a href="pm-suspending.php#pm-hibernate-pattern">Hvorfor får jeg et underligt mønster på skærmen, når jeg sætter computeren i dvale?</a></li>
                  </ul>
              </li>
              <li><a href="input-devices.php">Mus og tastaturer</a>
                  <ul>
                  <li><a href="input-devices.php#input-mice">Mus og andre pegeenheder</a></li>
                  <li><a href="input-devices.php#input-keyboard">Tastaturer</a></li>
                  <li><a href="input-devices.php#input-touchpads">Museplader og tegneplader</a></li>
                  </ul>
              </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div id="siteinfo"></div>
      </div>
    </div>
    <script async="true" type="text/javascript" src="/wp-content/themes/light-wordpress-theme/js/ubuntu-loco.js?ver=0.2-light"></script>
  </body>
</html>
