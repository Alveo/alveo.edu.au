<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" class="footer container" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
		</div><!-- .site-info -->
    <div class="row-fluid">
      <div class="col-md-3">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/nectar.png">
      </div>
      <div class="col-md-9">
        The University of Western Sydney is proud to be in partnership with, and acknowledges funding from, the National eResearch Collaboration Tools and Resources (NeCTAR) project (<a href="http://www.nectar.org.au">http://www.nectar.org.au</a>) to develop Alveo. 
  NeCTAR is an Australian Government project conducted as part of the Super Science initiative and financed by the Education Investment Fund.
      </div>
    </div>
    <?php if (get_page_template() != "/var/www/html/wp-content/themes/hcsvlab/page-templates/help-page.php"): ?>
    <div class="row">
      <div class="col-md-2">
        <img class="eightfive" alt="UWS" src="/wp-content/themes/hcsvlab/img/logos/UWS_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="MQ" src="/wp-content/themes/hcsvlab/img/logos/MQ_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/RMIT_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/UoM_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/ANU_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/UWA_Logo.png">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <img alt="UOS" src="/wp-content/themes/hcsvlab/img/logos/USY_Logo.png">
      </div>
      <div class="col-md-2">
        <img class="fivefive" alt="MQ" src="/wp-content/themes/hcsvlab/img/logos/UNE_Logo.png">
      </div>
      <div class="col-md-2">
        <img class="eightfive" alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/UoC_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/FU_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/UNSW_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/UoLT_Logo.png">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <img class="fourfive" alt="UTAS" src="/wp-content/themes/hcsvlab/img/logos/UTAS_Logo.png">
      </div>
      <div class="col-md-2">
        <img alt="MQ" src="/wp-content/themes/hcsvlab/img/logos/ASSTA_Logo.png">
      </div>
      <div class="col-md-2">
        <img class="eightfive" alt="AUSNC" src="/wp-content/themes/hcsvlab/img/logos/AUSNC_Logo.png">
      </div>
      <div class="col-md-2">
        <img class="fourfive" alt="NICTA" src="/wp-content/themes/hcsvlab/img/logos/NICTA_Logo.png">
      </div>
      <div class="col-md-2">
        <img class="sixfive" alt="Nectar" src="/wp-content/themes/hcsvlab/img/logos/Intersect_Logo.png">
      </div>
      <div class="col-md-2">
      </div>
    </div>
  <?php endif; ?>
  </footer>

</body>
</html>
