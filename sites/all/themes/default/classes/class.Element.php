<?php
/**
 * Helper Elements
 */
class Element
{
  /**
   * Theme Url
   */
  function the_theme_url() {
    return url(path_to_theme(), array('absolute' => TRUE));
  }

  /**
   * Theme Url
   */
  function theme_url() {
    echo $this->the_theme_url();
  }

  function get_header($page)  { ?>

      <header>
        <?php print render($page['global_nav']); ?>
        <?php print render($page['app_nav']); ?>
      </header>
      <?php print render($page['ceiling']); ?>
    <?php }


    function get_footer($page)
    { global $feed_icons; global $breadcrumb; ?>
	<footer class="atm-l-ps">
		<div class="atm-break"></div>		
       		<?php print render($page['floor']); ?>
       		<?php print $feed_icons; ?>
		<?php if ($breadcrumb && $breadcrumb != '<div class="breadcrumb"></div>'): ?>
		  <?php print $breadcrumb; ?>
		<?php else: ?>
		  <div class="breadcrumb">&nbsp;</div>
		<?php endif; ?>
		<?php print render($page['footer_first']); ?>
      		<?php print render($page['development']); ?>
    	</footer>

   <?php }
   
   
   
   /**
    * Time Running Out
    */

	function time_running_out(){ ?>
	
	
	<div class="alert alert-success phl" style="font-size:14px; max-width: 450px; border-radius:0; margin: 0 auto; text-align: center; background-color: #FFF; border: solid 0">
	<?php
	
	$x = time();
	$y = strtotime('tomorrow 00:00:00');
	$result = floor(($y - $x) / 60);
	
	$timestamp = time()-86400;
	
	$date = strtotime("+60 day", $timestamp);
	
	if ($result < 60) {
	    printf("<strong>Want your website ready for your customers by " . date('M j', $date) . "?</strong> Order within <strong> %d mins", floor($result / 60), $result % 60 . ".</strong>");
	} else if ($result >= 60) {
	    printf('<strong>Want your website ready for your customers by ' . date('M j', $date) . '?</strong> Order within <strong style="color: maroon">%d hrs %d mins</strong>', floor($result / 60), $result % 60 . '.');
	}
	?>
	.</div>
	<?php }
	
	
	/**
	 * TimeLeft
	 */
function itemsLeft(){ 

$maxDays=date('t');
$currentDayOfMonth=date('j');
$daysLeft=round(($maxDays - $currentDayOfMonth) / 14);

?>
<br/><span style="font-size: 11px;">Only <?php echo $daysLeft; ?> openings left this month!</span>

<?php }


	/**
	 * Guarantee
	 */
function guarantee($visible = FALSE)
{ ?>
	
	<div class="lead-feature-footer mbn <?php echo $visible; ?>">
    <div><i class="fa fa-star"></i> <strong>60 DAY SATISFACTION GUARANTEE**</strong>: If you are not completely satisfied with your purchase you have paid for, you may simply send me an e-mail describing why you are disappointed and I will issue a full refund. You have no risk, and everything to gain.</div>
  </div><!-- end lead-feature-footer -->
	
<?php } // end guarantee


	/**
	 * Experience
	 */
function experience($visible = '')
{

	$time = strtotime('2003-08-18 17:25:43');
   	$time = time() - $time; // to get the time since that moment

	$numberOfUnits = number_format(floor($time / 3600));
	?>
	<?php echo $numberOfUnits ?> hours of Web Development, Design & Fine Art experience combined.

<?php } // end experience


	/**
	 * Freelance CTA
	 */
function freelance_cta() 
{ ?>
	<a href="#packages" class="btn btn-primary btn-lg btn-block visible-xs">Select the perfect package</a>
  
<?php }   
 
	
	

} // end class elements
?>

