<?php $e = new Element;

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
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
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<style>
.atm-l-ps {max-width: 1400px;}
.sa-main, .sa-side { width: 100%; }
.sa-side { max-width: 700px; margin: 0 auto; }
.sa-main-content { max-width: 700px; margin: 0 auto; }
.sa-side-nav {display: none; }
@media(min-width: 820px) {
	.sa-side-nav { display: block; position: absolute; left: 0; top: 0; width: 200px }
	.sa-main { padding: 0 0 0 220px; width: auto; }
}
@media(min-width: 1165px) {
	.sa-main { padding: 0 425px 0 0}
	.sa-main-content { margin: 0; }
	.sa-side {width: 400px; position: absolute; top: 0; right: 0; }
	.sa-side-nav {display: none; }
}
@media(min-width: 1338px) {
	.sa-main { padding: 0 425px 0 220px }
	.sa-main-content { margin: 0; }
	.sa-side-nav {display: block}
	
}
</style>
<?php print render($page['styles_js']); ?>
<?php print $messages; ?>
<?php if ( $user->uid ) : ?>
  <div class="sa-vip-border"></div>
<?php endif; ?>
<?php $e->get_header($page); ?>
<section class="atm-l-ps">
	<div class="cf">
		<div class="relative">
			<div class="sa-side-nav">
				<?php print render($page['sidebar_second']); ?>
			</div><!-- end sa-side-nav -->
			<div class="sa-main">
				<div class="sa-main-content">
					<?php print render($page['admin_first']); ?>
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
					<?php print render($page['promo_top']); ?>
					<?php if ($title): ?>
						<h2 class="docs-section-heading"><?php print render($title_prefix); ?><?php print $title; ?><?php print render($title_suffix); ?></h2>
					<?php endif; ?>
					<?php print render($page['help']); ?>
					<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
					<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
					<?php print render($page['content']); ?>
					<?php print render($page['content_second_a']); ?>
					<?php print render($page['content_second_b']); ?>
				</div><!-- end sa-main-content -->
			</div><!-- end sa-main -->
			<div class="sa-side">
				<div class="prs-sm">
					<?php print render($page['sidebar_first']); ?>
					
					<?php print $feed_icons; ?>
				</div><!-- end prs-sm 
			</div><!-- end sa-side -->
		</div><!-- end relative -->
	</div><!-- end cf -->
	<?php $e->get_footer($page); ?>
</section><!-- end atm-l-ps -->