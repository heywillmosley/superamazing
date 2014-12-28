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

<div class="pas">
<div class="item-wrapper">
    <div class="item-header">
        <div class="item-container-title">Fresh Produce</div>
        <a href="#" class="btn btn-default">See More</a>
    </div><!-- end item-container-header -->
    <div class="item-container-one-up">
        <div class="item-container">
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                  <div class="item-book-bind" style="background-color: navy"></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://media.mediatemple.netdna-cdn.com/wp-content/uploads/2014/10/01-frank-lloyd-wright-opt-small.jpg" alt="">
                </div><!-- end item-cover -->
                <div class="item-details relative">
                    <div class="item-title"><a href="#">A Frank Lloyd Wright Approach To Digital Design<span class="paragraph-end"></span></a></div>

                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <div class="item-markdown"></div>
                            <a href="#" class="btn btn-success btn-sm">FREE</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                  
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                  <div class="item-book-bind"></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://media.mediatemple.netdna-cdn.com/wp-content/uploads/2014/11/warm-colors-preview-opt.jpg" alt="">
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Freebie: Responsive And Mobile Icon Set (100 Icons, PNG, PSD)<span class="paragraph-end"></span></a></div>
                    
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                          <div class="item-markdown"></div>
                            <a href="#" class="btn btn-success btn-sm">FREE</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                  <div class="item-book-bind"></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://media.mediatemple.netdna-cdn.com/wp-content/uploads/2014/12/custom-styling-opt.png" alt="">
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Chartist.js, An Open-Source Library For Responsive Charts<span class="paragraph-end"></span></a></div>
                    
                    <div class="item-rating-price-container">
                      
                       <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <div class="item-markdown">$4.99</div>
                            <a href="#" class="btn btn-success btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                  <div class="item-book-bind"></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://media.mediatemple.netdna-cdn.com/wp-content/uploads/2014/11/project-occupied-opt-small.jpg" alt="">
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Understanding Mobile Back End As A Service<span class="paragraph-end"></span></a></div>
                    
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-success btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
        </div><!-- item-container -->
    </div><!-- end item-container-up -->
</div>


<div class="item-wrapper">
    <div class="item-header">
        <div class="item-container-title">Fresh Produce</div>
        <a href="#" class="btn btn-info">See More</a>
    </div><!-- end item-container-header -->
    <div>
        <div class="item-container">
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Cucurbita_2011_G1.jpg/320px-Cucurbita_2011_G1.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details relative">
                    <div class="item-title"><a href="#">Pumpkins<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
        </div><!-- item-container -->
    </div><!-- end item-container-up -->
</div><!-- end item-wrapper -->
</div><!-- end pas -->

<?php // Field variables
//$field_content_after_hero = field_view_field('node', $node, 'field_content_after_hero', array('label' => 'hidden'));