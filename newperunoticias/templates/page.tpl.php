<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="main">
  <div id="menutop">
    <div id="menutop-inner" class="container_16">
      <?php
			print theme('links__system_main_menu', array(
						'links' => $main_menu,
						'attributes' => array(
							'id' => 'main-menu',
							'class' => array('links', 'inline', 'clearfix'),
						),
					));
			?>
    </div>
  </div>
  <div id="header">
    <div id="header-inner" class="container_16">
      <div id="social"> <?php print render($page['social']); ?> </div>
      <h1 id="logo"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><span><?php print $site_name; ?></span></a></h1>
      <?php if ($site_slogan): ?>
      <div id="slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>
		<?php if ($page['searchbox']): ?>
        	<div id="search-block"> <?php print render($page['searchbox']); ?> </div>
        <?php : bytes 299237376-302931516/484564547
C2:Accept-Ranges: bytes
C2:Cache-Control: no-store
C2:ETag: "822e879d2ff3ac023e3068c2b6ebfe20"
C2:Content-Length: 3694141
C2:
C2:Recibiendo datos...
C5:La conexión ha sido cerrada por el servidor.
C5:Desconectado.
C5:Conectando...
C0:La conexión ha sido cerrada por el servidor.
C0:Desconectado.
C0:Conectando...
C5:Enviando GET...
C4:La conexión ha sido cerrada por el servidor.
C4:Desconectado.
C4:Conectando...
C0:Enviando GET...
C1:La conexión ha sido cerrada por el servidor.
C1:Desconectado.
C1:Conectando...
C5:HTTP/1.1 206 Partial content
C5:Connection: close
C5:Date: Sat, 19 Jul 2014 01:03:19 GMT
C5:Content-Type: application/octet-stream
C5:Content-Range: bytes 106954752-116785152/484564547
C5:Accept-Ranges: bytes
C5:Cache-Control: no-store
C5:ETag: "822e879d2ff3ac023e3068c2b6ebfe20"
C5:Content-Length: 9830401
C5:
C5:Recibiendo datos...
time 1405731815, speed 612252, downl 462789864 Bytes
C4:Enviando GET...
C0:HTTP/1.1 206 Partial content
C0:Connection: close
C0:Date: Sat, 19 Jul 2014 01:03:19 GMT
C0:Content-Type: application/octet-stream
C0:Content-Range: bytes 480509952-484564546/484564547
C0:Accept-Ranges: bytes
C0:Cache-Control: no-store
C0:ETag: "822e879d2ff3ac023e3068c2b6ebfe20"
C0:Content-Length: 4054595
C0:
C0:Recibiendo datos...
C1:Enviando GET...
C4:HTTP/1.1 206 Partial content
C4:Connection: close
C4:Date: Sat, 19 Jul 2014 01:03:19 GMT
C4:Content-Type: application/octet-stream
C4:Content-Range: bytes 116916224-121272536/484564547
C4:Accept-Ranges: bytes
C4:Cache-Control: no-store
C4:ETag: "822e879d2ff3ac023e3068c2b6ebfe20"
C4:Content-Length: 4356313
C4:
C4:Recibiendo datos...
C1:HTTP/1.1 206 Partial content
C1:Connection: close
C1:Date: Sat, 19 Jul 2014 01:03:19 GMT
C1:Content-Type: application/octet-stream
C1:Content-Range: bytes 290586624-292434314/484564547
C1:Accept-Ranges: bytes
C1:Cache-Control: no-store
C1:ETag: "822e879d2ff3ac023e3068c2b6ebfe20"
C1:Content-Length: 1847691
C1:
C1:Recibie