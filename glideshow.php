<?php
$direct_path =  get_bloginfo('wpurl')."/wp-content/plugins/wp-glideshow";
?>

<script type="text/javascript" src="<?php echo $direct_path;?>/scripts/slider.js"></script> 

<style>

#slidewrapper {
background: #<?php if ( get_option('glideshow-background-color')) {echo get_option('glideshow-background-color');} else {echo 'EEE';} ?>;
display: block;
width: auto;
height: <?php if ( get_option('glideshow-img-height')) {echo get_option('glideshow-img-height')+20;} else {echo '270';} ?>px;
margin-bottom: 10px;   
border: 5px solid #<?php if ( get_option('glideshow-border-color')) {echo get_option('glideshow-border-color');} else {echo 'CCC';} ?>;
}

.glidecontentwrapper {
position: relative;
float: left;
width: 100%;
height: 100%;
overflow: hidden;
z-index: 0;
}

.glidecontent { 
position: absolute; 
margin: 0px;
padding: 0px;
width: 100%;
background: #<?php if ( get_option('glideshow-background-color')) {echo get_option('glideshow-background-color');} else {echo 'EEE';} ?>;
float: left;
}

.glide_img {
float: left;
width: <?php if ( get_option('glideshow-img-width')) {echo get_option('glideshow-img-width');} else {echo '300';} ?>px;
height: <?php if ( get_option('glideshow-img-height')) {echo get_option('glideshow-img-height');} else {echo '250';} ?>px;
text-align: center;
margin: 10px;
padding: 0px;
}

.glide_img img { 
border: 1px solid #CCC !important;
width: <?php if ( get_option('glideshow-img-width')) {echo get_option('glideshow-img-width');} else {echo '300';} ?>px;
height: <?php if ( get_option('glideshow-img-height')) {echo get_option('glideshow-img-height');} else {echo '250';} ?>px;
float: left !important;
padding: 0px !important;
}

.glide_content {
float: left;
width: auto;
margin-left: 15px;
}

.glide_content h2 a {
float: left;
width: auto;
color: #<?php if ( get_option('glideshow-text-color')) {echo get_option('glideshow-text-color');} else {echo '3b3b3b';} ?>;
font-size:  <?php if ( get_option('glideshow-title-size')) {echo get_option('glideshow-title-size');} else {echo '18';} ?>px;
padding-bottom: 0px !important;
line-height: auto;
margin-bottom: 10px;
font-weight: bold;
text-decoration: none;
}

.glide_content p {
float: left;
width: <?php if ( get_option('glideshow-text-width')) {echo get_option('glideshow-text-width');} else {echo '290';} ?>px;
}

.content_big {
float: left;
width: 95%;
}

.content_big p {
float: left;
width: 95%;
}


.cssbuttonstoggler{ 
height: 30px;
font-size: 12px;
margin-top: 10px;
margin: 0px 10px 0px 0px; 
text-align: center;
float: right;
position: absolute;
width: auto;
right: 0px;
z-index: 9999;
bottom: 5px;
}

.cssbuttonstoggler a {
text-decoration: none;
float: left;
}

.cssbuttonstoggler a span {
border: none; 
background: #<?php if ( get_option('glideshow-navigation-background-color')) {echo get_option('glideshow-navigation-background-color');} else {echo 'FFF';} ?>; none repeat scroll 0% 0%; 
cursor: pointer; 
margin: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
padding: 5px 7px;       
color: #<?php if ( get_option('glideshow-navigation-color')) {echo get_option('glideshow-navigation-color');} else {echo '3b3b3b';} ?>;
}

.cssbuttonstoggler a.selected, .cssbuttonstoggler a:hover{ 
}

.cssbuttonstoggler a.selected span, .cssbuttonstoggler a:hover span{ /*style for selected and hover page's toggler link. ".selected" class auto generated! */
margin-right: 3px;
cursor: pointer; 
color: #<?php if ( get_option('glideshow-navigation-active-color')) {echo get_option('glideshow-navigation-active-color');} else {echo 'FFF';} ?>; 
background-color: #<?php if ( get_option('glideshow-navigation-active-background-color')) {echo get_option('glideshow-navigation-active-background-color');} else {echo '3b3b3b';} ?>;
text-decoration: none;
}

.cssbuttonstoggler a.toc{ 
}

.cssbuttonstoggler a.prev, .glidecontenttoggler-2 a.next{ 
}

.cssbuttonstoggler a.prev:hover, .glidecontenttoggler-2 a.next:hover {
}

.copy_wrap {
display: block;
margin: 0px;
clear: both;
}

a.copy {
font-size: 9px;
text-align: right;
display: block;
}

</style>

<script type="text/javascript">
featuredcontentglider.init({
gliderid: "glideshow",
contentclass: "glidecontent",
togglerid: "p-select",
remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
selected: 1,
persiststate: true,
speed: <?php if ( get_option('glideshow-slider-speed')) {echo get_option('glideshow-slider-speed');} else {echo '500';} ?>,
direction: "<?php if ( get_option('glideshow-slider-style')) {echo get_option('glideshow-slider-style');} else {echo 'rightleft';} ?>", //set direction of glide: "updown", "downup", "leftright", or "rightleft"
autorotate: <?php if ( get_option('glideshow-slider-auto')) {echo get_option('glideshow-slider-auto');} else {echo 'true';} ?>, //Auto rotate contents (true/false)?
autorotateconfig: [<?php if ( get_option('glideshow-slider-duration')) {echo get_option('glideshow-slider-duration');} else {echo '4000';} ?>, 0] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
})
</script>
<div id="slidewrapper">
        
<?php

        if (!function_exists('fs_slide_credit')) {

                function fs_slide_credit() {
                        
                    echo '<div class="copy_wrap" style="display: block; margin: 0px; clear: both;"><p style="font-size: 9px; text-align: right; display: block;">Slider by <a style="font-size: 9px; text-align: right;" href="http://www.iwebix.de/" target="_blank" title="webdesign">IWEBIX Webdesign</a></p></div>';
                    
                }
                
        }
        
        add_action('wp_footer', 'fs_slide_credit');

        $order = get_option('glideshow-order');
        
        switch($order) {
                
                case "date":
                        $order = "post_date";
                        break;
                case "title":
                        $order = "post_title";
                        break;
                default:
                        $order = "post_date";
                        break;
        }
        
        $sort = get_option('glideshow-sort');
        
        switch($sort) {
                
                case "asc":
                        $sort = "ASC";
                        break;
                case "desc":
                        $sort = "DESC";
                        break;
                default:
                        $sort = "DESC";
                        break;
        }

?>

        <div id="glideshow" class="glidecontentwrapper">

                <?php
                global $wpdb;
                
                $count = 0;
                
                $counting = 1;
                
                $querystr = "
                        SELECT wposts.* 
                        FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
                        WHERE wposts.ID = wpostmeta.post_id 
                        AND wpostmeta.meta_key = 'content_glider' 
                        AND wpostmeta.meta_value = '1' 
                        AND wposts.post_status = 'publish' 
                        AND (wposts.post_type = 'post' OR wposts.post_type = 'page')
                        ORDER BY $order $sort";
                
                $pageposts = $wpdb->get_results($querystr, OBJECT); ?>
                
                <?php if ($pageposts): ?>
                        
                        <?php global $post; ?>
                        
                        <?php foreach ($pageposts as $post): ?>
                        
                        <?php $do_not_duplicate[$post->ID] = $post->ID; ?>
                        
                        <?php setup_postdata($post);
                        
                        $custom = get_post_custom($post->ID);
                        
                        $thumb = get_glider_thumb("content_glider");
                        
                        $chars = get_option('glideshow-text-length');
                        
                        if(!$chars) {
                                
                                $chars = 200;
                        }
                        
                        $count ++;
                        
                ?>
        
                        <div class="glidecontent">
                                <?php if($thumb) { ?>
                                <div class="glide_img">
                                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php echo $thumb;?>" /></a>
                                </div>
                                <?php } ?>
                                <div class="glide_content <?php if(!$thumb) {echo "content_big";}?>">
                                        <h2><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
                                        <p><?php echo cut_glider_text(get_the_excerpt(), $chars); ?></p>
                                </div>
                        </div>
                <?php endforeach; ?>
                <?php endif; ?>
                        <div id="p-select" class="cssbuttonstoggler">
                                <?php
                                        $x = 1;
                                        while($x <= $count) {
                                                echo "<a href='#' class='toc'><span>$x</span></a>";
                                                $x++;
                                        }
                                ?>
                                
                                <a href="#" class="prev"><span><?php if(get_option('glideshow-navigation-back')) {echo get_option('glideshow-navigation-back');} else {echo "back";} ?></span></a> <a href="#" class="next"><span><?php if(get_option('glideshow-navigation-next')) {echo get_option('glideshow-navigation-next');} else {echo "next";} ?></span></a>
                        </div>
        </div>
</div>

		