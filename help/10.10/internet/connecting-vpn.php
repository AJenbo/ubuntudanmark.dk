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
    <title>Virtuelle private netværk</title>
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
    <link rel="home" href="index.php" title="Internet og netværk" />
    <link rel="up" href="connecting.php" title="Kapitel 2. Måder at forbinde på" />
    <link rel="prev" href="connecting-mobile.php" title="Mobilt bredbånd" />
    <link rel="next" href="connecting-dsl.php" title="DSL" />
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
            $primary_header_menu = str_replace(' menu-item-636', ' menu-item-636 current-menu-item', $primary_header_menu);
            echo($primary_header_menu);
            ?></ul>
          </div>
        </div>
      </div>
      <div id="secondary-header">
        <div id="secondary-access">
          <div id="loco-search-form">
            <form action="/" method="get" id="searchform">
              <div>
                <input type="text" tabindex="1" size="32" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" value="" name="s" id="s">
                <input type="submit" tabindex="2" value="Søg" name="searchsubmit" id="searchsubmit">
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
              <h1 class="entry-title">Virtuelle private netværk</h1>
              <div class="entry-content">
                <div class="sect1" title="Virtuelle private netværk">
                  <p>Der findes tre typer af virtuelle private netværk (VPN), der pt. understøttes af Netværkshåndteringen.</p>
                  <div class="sect2" title="Cisco VPN">
                    <div class="titlepage">
                      <div>
                        <div>
                          <h3 class="title"><a id="connecting-vpn-cicso"></a>Cisco VPN</h3>
                        </div>
                      </div>
                    </div>
                    <div class="caution" title="Pas på" style="margin-left: 0.5in; margin-right: 0.5in;">
                      <table border="0" summary="Caution">
                        <tr>
                          <td rowspan="2" align="center" valign="top" width="25">
                            <img alt="[Pas på]" src="../libs/admon/caution.png" />
                          </td>
                          <th align="left"></th>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                            <p>Du skal have <a class="ulink" href="apt:network-manager-vpnc" target="_top">network-manager-vpnc</a> og <a class="ulink" href="apt:network-manager-vpnc-gnome" target="_top">network-manager-vpnc-gnome</a> installeret for at kunne forbinde til et Cisco VPN.</p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="procedure">
                      <ol class="procedure" type="1">
                        <li class="step" title="Trin 1">
                          <p>Højreklik på ikonet for Netværkshåndtering i systemets statusfelt og klik på <em class="guilabel">Redigér forbindelser...</em>.</p>
                        </li>
                        <li class="step" title="Trin 2">
                          <p>Vælg fanen <em class="guilabel">VPN</em>.</p>
                        </li>
                        <li class="step" title="Trin 3">
                          <p>Klik på <span class="guibutton"><strong>Tilføj</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 4">
                          <p>Vælg <em class="guilabel">Cisco Compatible VPN (vpnc)</em> fra rulle-feltet.</p>
                        </li>
                        <li class="step" title="Trin 5">
                          <p>Klik på <em class="guilabel">Opret...</em>.</p>
                        </li>
                        <li class="step" title="Trin 6">
                          <p>Indtast et navn til forbindelsen ud for <em class="guilabel">Forbindelsesnavn:</em>.</p>
                        </li>
                        <li class="step" title="Trin 7">
                          <p>Indtast dine oplysninger og klik på <span class="guibutton"><strong>Anvend</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 8">
                          <p>Klik på <span class="guibutton"><strong>Luk</strong></span>.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="sect2" title="PPTP VPN">
                    <div class="titlepage">
                      <div>
                        <div>
                          <h3 class="title"><a id="connecting-vpn-pptp"></a>PPTP VPN</h3>
                        </div>
                      </div>
                    </div>
                    <div class="caution" title="Pas på" style="margin-left: 0.5in; margin-right: 0.5in;">
                      <table border="0" summary="Caution">
                        <tr>
                          <td rowspan="2" align="center" valign="top" width="25">
                            <img alt="[Pas på]" src="../libs/admon/caution.png" />
                          </td>
                          <th align="left"></th>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                            <p>Du skal have <a class="ulink" href="apt:network-manager-pptp" target="_top">network-manager-pptp</a> og <a class="ulink" href="apt:network-manager-pptp-gnome" target="_top">network-manager-pptp-gnome</a> installeret for at kunne forbinde til et PPTP VPN.</p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="procedure">
                      <ol class="procedure" type="1">
                        <li class="step" title="Trin 1">
                          <p>Højreklik på ikonet for Netværkshåndtering i systemets statusfelt og klik på <em class="guilabel">Redigér forbIndelser...</em></p>
                        </li>
                        <li class="step" title="Trin 2">
                          <p>Vælg fanen <em class="guilabel">VPN</em>.</p>
                        </li>
                        <li class="step" title="Trin 3">
                          <p>Klik på <span class="guibutton"><strong>Tilføj</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 4">
                          <p>Vælg <em class="guilabel">Point-to-Point Tunneling Protocol (PPTP)</em> fra rullegardinsmenuen.</p>
                        </li>
                        <li class="step" title="Trin 5">
                          <p>Klik på <em class="guilabel">Opret...</em>.</p>
                        </li>
                        <li class="step" title="Trin 6">
                          <p>Indtast et navn til forbindelsen ud for <em class="guilabel">Forbindelsesnavn:</em>.</p>
                        </li>
                        <li class="step" title="Trin 7">
                          <p>Indtast adressen for det VPN du ønsker at forbinde til i feltet <em class="guilabel">Gateway</em>.</p>
                        </li>
                        <li class="step" title="Trin 8">
                          <p>Indtast et brugernavn og en adgangskode, vis dette er påkrævet af dit VPN.</p>
                        </li>
                        <li class="step" title="Trin 9">
                          <p>Indtast domænet for dit VPN, om nødvendigt, i feltet <em class="guilabel">NT Domain</em>.</p>
                        </li>
                        <li class="step" title="Trin 10">
                          <p>Klik på <span class="guibutton"><strong>Anvend</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 11">
                          <p>Klik på <span class="guibutton"><strong>Luk</strong></span>.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="sect2" title="OpenVPN">
                    <div class="titlepage">
                      <div>
                        <div>
                          <h3 class="title"><a id="connecting-vpn-openvpn"></a>OpenVPN</h3>
                        </div>
                      </div>
                    </div>
                    <div class="caution" title="Pas på" style="margin-left: 0.5in; margin-right: 0.5in;">
                      <table border="0" summary="Caution">
                        <tr>
                          <td rowspan="2" align="center" valign="top" width="25">
                            <img alt="[Pas på]" src="../libs/admon/caution.png" />
                          </td>
                          <th align="left"></th>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                            <p>Du skal have <a class="ulink" href="apt:network-manager-openvpn" target="_top">network-manager-openvpn</a> og <a class="ulink" href="apt:network-manager-openvpn-gnome" target="_top">network-manager-openvpn-gnome</a> installeret for at kunne forbinde til et OpenVPN.</p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="procedure">
                      <ol class="procedure" type="1">
                        <li class="step" title="Trin 1">
                          <p>Højreklik på ikonet for Netværkshåndtering i systemets statusfelt og klik på <em class="guilabel">Redigér forbIndelser...</em></p>
                        </li>
                        <li class="step" title="Trin 2">
                          <p>Vælg fanen <em class="guilabel">VPN</em>.</p>
                        </li>
                        <li class="step" title="Trin 3">
                          <p>Klik på <span class="guibutton"><strong>Tilføj</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 4">
                          <p>Vælg <em class="guilabel">OpenVPN</em> fra rullegardinsmenuen.</p>
                        </li>
                        <li class="step" title="Trin 5">
                          <p>Klik på <em class="guilabel">Opret...</em>.</p>
                        </li>
                        <li class="step" title="Trin 6">
                          <p>Indtast et navn til forbindelsen ud for <em class="guilabel">Forbindelsesnavn:</em>.</p>
                        </li>
                        <li class="step" title="Trin 7">
                          <p>Indtast adressen for det VPN du ønsker at forbinde til i feltet <em class="guilabel">Gateway</em>.</p>
                        </li>
                        <li class="step" title="Trin 8">
                          <p>Vælge den godkendelsestype, du ønsker at bruge, fra rullefeltet <em class="guilabel">Godkendelse</em>.</p>
                        </li>
                        <li class="step" title="Trin 9">
                          <p>Indtast dine oplysninger og klik på <span class="guibutton"><strong>Anvend</strong></span>.</p>
                        </li>
                        <li class="step" title="Trin 10">
                          <p>Klik på <span class="guibutton"><strong>Luk</strong></span>.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="sect2" title="Konfigurationsfiler">
                    <div class="titlepage">
                      <div>
                        <div>
                          <h3 class="title"><a id="connecting-vpn-config"></a>Konfigurationsfiler</h3>
                        </div>
                      </div>
                    </div>
                    <p>Netværkshåndtering kan indlæse og gemme VPN-indstillinger for individuelle forbindelser via konfigurationsfiler.</p>
                    <div class="sect3" title="Importer konfiguration">
                      <div class="titlepage">
                        <div>
                          <div>
                            <h4 class="title"><a id="connecting-vpn-config-import"></a>Importer konfiguration</h4>
                          </div>
                        </div>
                      </div>
                      <p>Du kan bruge en tidligere gemt konfigurationsfil til at importere VPN-forbindelsesindstillinger.</p>
                      <div class="procedure">
                        <ol class="procedure" type="1">
                          <li class="step" title="Trin 1">
                            <p>Højreklik på ikonet for Netværkshåndtering i systemets statusfelt og klik på <em class="guilabel">Redigér forbindelser...</em>.</p>
                          </li>
                          <li class="step" title="Trin 2">
                            <p>Vælg fanen <em class="guilabel">VPN</em>.</p>
                          </li>
                          <li class="step" title="Trin 3">
                            <p>Klik på <span class="guibutton"><strong>Importér</strong></span>.</p>
                          </li>
                          <li class="step" title="Trin 4">
                            <p>Vælg din konfigurationsfil og klik på <span class="guibutton"><strong>Åbn</strong></span>.</p>
                          </li>
                          <li class="step" title="Trin 5">
                            <p>Klik på <span class="guibutton"><strong>Anvend</strong></span>.</p>
                          </li>
                          <li class="step" title="Trin 6">
                            <p>Klik på <span class="guibutton"><strong>Luk</strong></span>.</p>
                          </li>
                        </ol>
                      </div>
                    </div>
                    <div class="sect3" title="Eksporter konfiguration">
                      <div class="titlepage">
                        <div>
                          <div>
                            <h4 class="title"><a id="connecting-vpn-config-export"></a>Eksporter konfiguration</h4>
                          </div>
                        </div>
                      </div>
                      <p>Du kan gemme indstillingerne for en VPN-forbindelse til en konfigurationsfil.</p>
                      <div class="procedure">
                        <ol class="procedure" type="1">
                          <li class="step" title="Trin 1">
                            <p>Højreklik på ikonet for Netværkshåndtering i systemets statusfelt og klik på <em class="guilabel">Redigér forbIndelser...</em></p>
                          </li>
                          <li class="step" title="Trin 2">
                            <p>Vælg fanen <em class="guilabel">VPN</em>.</p>
                          </li>
                          <li class="step" title="Trin 3">
                            <p>Vælg forbindelsen som du vil gemme indstillingerne for.</p>
                          </li>
                          <li class="step" title="Trin 4">
                            <p>Klik på <span class="guibutton"><strong>Eksportér</strong></span>.</p>
                          </li>
                          <li class="step" title="Trin 5">
                            <p>Vælg filnavnet og placeringen hvor du vil gemme konfigurationsfilen.</p>
                          </li>
                          <li class="step" title="Trin 6">
                            <p>Klik på <span class="guibutton"><strong>Gem</strong></span>.</p>
                          </li>
                          <li class="step" title="Trin 7">
                            <p>Klik på <span class="guibutton"><strong>Luk</strong></span>.</p>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aside main-aside" id="secondary" style="-moz-border-radius: 5px 5px 5px 5px;">
          <ul class="xoxo">
            <li class="widgetcontainer widget" id="">
              <h3 class="widgettitle">Internet og netværk</h3>
              <ul>
                <li><a href="networkmanager.php">1. Opret forbindelse til internettet eller et netværk</a></li>
                <li><a href="connecting.php">2. Måder at forbinde på</a>
                  <ul>
                  <li><a href="connecting-wired.php">Kablet (LAN)</a>
                      <ul>
                      <li><a href="connecting-wired.php#connecting-wired-manual">Manuel indtastning af din netværksopsætning</a></li>
                      </ul>
                  </li>
                  <li><a href="connecting-wireless.php">Trådløs</a></li>
                  <li><a href="connecting-mobile.php">Mobilt bredbånd</a></li>
                  <li><a href="connecting-vpn.php">Virtuelle private netværk</a>
                      <ul>
                        <li><a href="connecting-vpn.php#connecting-vpn-cicso">Cisco VPN</a></li>
                        <li><a href="connecting-vpn.php#connecting-vpn-pptp">PPTP VPN</a></li>
                        <li><a href="connecting-vpn.php#connecting-vpn-openvpn">OpenVPN</a></li>
                        <li><a href="connecting-vpn.php#connecting-vpn-config">Konfigurationsfiler</a></li>
                      </ul>
                  </li>
                  <li><a href="connecting-dsl.php">DSL</a></li>
                  </ul>
                </li>
                <li><a href="disconnecting.php">3. Frakobling</a></li>
                <li><a href="information.php">4. Information om din forbindelse</a></li>
                <li><a href="troubleshooting.php">5. Fejlfinding</a>
                  <ul>
                  <li><a href="troubleshooting-lan.php">Fejlfinding for kablet netopkobling</a>
                      <ul>
                      <li><a href="troubleshooting-lan.php#network-troubleshooting-ifconfig">Få information om den aktuelle netopkobling</a></li>
                      <li><a href="troubleshooting-lan.php#network-troubleshooting-ping">Kontrollér om en netopkobling virker korekt</a></li>
                      </ul>
                  </li>
                  <li><a href="troubleshooting-wireless.php">Fejlfinding af trådløs netopkobling</a>
                      <ul><li><a href="troubleshooting-wireless.php#troubleshooting-wireless-disabled">Kontroller, at enheden er tændt</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-device">Kontroller genkendelse af enheder</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-ndiswrapper">Brug af Windows-drivere til trådløse enheder</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-connection">Kontrollér for forbindelse til ruteren</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-ip">Kontrollér IP-tildeling</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-dns">Kontrollér DNS</a></li>
                      <li><a href="troubleshooting-wireless.php#troubleshooting-wireless-ipv6">IPV6 understøttes ikke</a></li></ul></li>
                  <li><a href="troubleshooting-mobile.php">Fejlfinding for mobil bredbånd</a></li>
                  <li><a href="troubleshooting-keyring.php">Hvorfor spørger Gnome Nøglering om min adgangskode hver gang jeg logger ind?</a></li>
                  </ul>
                </li>
                <li><a href="modem.php">6. Modemmer</a>
                  <ul>
                  <li><a href="modem-identify.php">Identificer dit modem</a></li>
                  <li><a href="modem-connect.php">Opkobling med et modem</a></li>
                  </ul>
                </li>
                <li><a href="connecttoserver.php">7. Forbind til en server</a>
                  <ul>
                  <li><a href="connecttoserver-ftp.php">FTP</a></li>
                  <li><a href="connecttoserver-ssh.php">SSH</a></li>
                  <li><a href="connecttoserver-windowsshare.php">Windows-deling</a></li>
                  <li><a href="connecttoserver-webdav.php">WebDAV (HTTP)</a></li>
                  <li><a href="connecttoserver-custom.php">Tilpasset</a></li>
                  </ul>
                </li>
                <li><a href="networking.php">8. Hjemmenetværk</a>
                  <ul>
                  <li><a href="networking-browsenetcomps.php">Se andre computere på netværket</a></li>
                  <li><a href="networking-shares.php">Del filer og mapper med andre computere</a>
                    <ul>
                    <li><a href="networking-shares.php#networking-shares-ubuntuone">Deling af filer med Ubuntu One</a></li>
                    <li><a href="networking-shares.php#networking-shares-sharesadmin">Deling af mapper via programmet Delte mapper</a></li>
                    <li><a href="networking-shares.php#networking-shares-nautilus">Deling af mapper via Nautilus</a></li>
                    <li><a href="networking-shares.php#networking-shares-windows">Tilgå delte mapper via Windows</a></li>
                    <li><a href="networking-shares.php#networking-shares-troubleshooting">Problemer med at forbinde til delte mapper i Windows</a></li>
                    </ul>
                  </li>
                  </ul>
                </li>
                <li><a href="web-apps.php">9. Internetprogrammer</a>
                  <ul>
                  <li><a href="web-browsing.php">På nettet med Firefox</a>
                      <ul>
                      <li><a href="web-browsing.php#web-browsing-addons">Hent tilføjelser til din Firefox</a></li>
                      <li><a href="web-browsing.php#web-browsing-fontsize">Ændr skrifttypens standardstørrelse</a></li>
                      </ul>
                  </li>
                  <li><a href="email.php">Send og modtag e-post</a>
                      <ul>
                      <li><a href="email.php#email-evolution-spam">Filtrering af spam</a></li>
                      <li><a href="email.php#email-alternative">Alternative e-post-programmer</a></li>
                      </ul>
                  </li>
                  <li><a href="internet-instant-messaging.php">Chat</a>
                      <ul>
                      <li><a href="internet-instant-messaging.php#internet-instant-messaging-empathy">Empathy chat</a></li>
                      <li><a href="internet-instant-messaging.php#internet-instant-messaging-ekiga">Ekiga softwaretelefon</a></li>
                      <li><a href="internet-instant-messaging.php#internet-instant-messaging-irc">IRC chat</a></li>
                      <li><a href="internet-instant-messaging.php#internet-instant-messaging-irchelp">Få hjælp via IRC chat</a></li>
                      </ul>
                  </li>
                  <li><a href="internet-otherapps.php">Andre internetprogrammer</a>
                      <ul>
                      <li><a href="internet-otherapps.php#internet-otherapps-p2p">Peer-to-peer netværk</a></li>
                      <li><a href="internet-otherapps.php#internet-otherapps-newsreaders">Nyhedslæsere</a></li>
                      </ul>
                  </li>
                  <li><a href="web-design.php">Design web-sider</a></li>
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
