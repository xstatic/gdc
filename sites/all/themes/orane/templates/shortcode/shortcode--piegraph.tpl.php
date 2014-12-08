<div class="skills_boxes"><span class="chart" data-percent="<?php print $percent; ?>"><span class="percent"></span></span><div class="title"><h3><?php print $title; ?></h3></div><p><?php print $content; ?></p></div><!-- end skills_boxes --><?php 
  global $base_url;
  $theme_path = drupal_get_path('theme', 'orane'); 
?>
<script src="<?php print $base_url.'/'.$theme_path.'/templates/shortcode/js/jquery.easypiechart.min.js';?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
	if ( jQuery.isFunction(jQuery.fn.appear) ) {
	jQuery('.chart').appear(function() {
        jQuery('.chart').easyPieChart({
            easing: 'easeOutBounce',
            size: 200,
            animate: 2000,
            lineWidth: 10,
            lineCap: 'square',
            lineWidth : 10,
            barColor: ''+Drupal.settings.drupalexp.base_color+'',
            trackColor: '#F5F5F5',
            scaleColor: false,
            onStep: function(a,b,c) {
              $(this.el).find('span.percent').text(Math.round(a) + '%');               
            }
        });
		}, {
            accX: 0,
            accY: 0,
            one: false
        });
		}else{
		jQuery('.chart').easyPieChart({
            easing: 'easeOutBounce',
            size: 200,
            animate: 2000,
            lineWidth: 10,
            lineCap: 'square',
            lineWidth : 10,
            barColor: ''+Drupal.settings.drupalexp.base_color+'',
            trackColor: '#F5F5F5',
            scaleColor: false,
            onStep: function(a,b,c) {
              $(this.el).find('span.percent').text(Math.round(a) + '%');               
            }
        });
		}
    });
</script>