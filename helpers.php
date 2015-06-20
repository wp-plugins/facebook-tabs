<?php
/*
 * Facebook Tabs - Helper File
 * Wordpress Plugin
 */

class HelpersFacebookTabs{
    public function __construct() {
        $data = "";
        $data .= "
            <div id='fb-root'></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
";
        echo $data;
        return;
    }

    public function display_facebook_likebox($likeboxurl,$width,$height,$colorscheme,$show_faces,$stream){
        $data = "";
        $data .= "
            <div class='fb-page' data-href='$likeboxurl' data-width='$width' data-height='$height' data-small-header='false' data-adapt-container-width='false' data-hide-cover='false' data-show-facepile='$show_faces' data-show-posts='$stream'><div class='fb-xfbml-parse-ignore'><blockquote cite='$likeboxurl'><a href='$likeboxurl'>Facebook</a></blockquote></div></div>
        ";
        echo $data;
        return;
    }
    
        public function display_facebook_activity($activityurl,$width,$height,$colorscheme){
        $data = "";
        
        $data .= "  
<div class='fb-activity' data-site='$activityurl' data-action='likes, recommends' data-width='$width' data-height='$height' data-colorscheme='$colorscheme' data-header='false'></div>";
$support_width = $width-100;
$data .= "<div class='author' style='font-size:9px; padding-left: $support_width";
$data .= "px; text-decoration: none; color:#ccc;'><a href='//www.visualscope.com' title='visualscope.com' target='_blank'>Visualscope</a></div>";
 
        echo $data;
        return;
    }
    
}