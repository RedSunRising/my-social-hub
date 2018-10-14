<?php

/*
Plugin Name: My Social Hub
Plugin URI: http://dawnp.sgedu.site
Description: A plugin that pushes posts to Facebook, Instagram and Twitter
Version: 1.0.0
Author: Dawn Passerini
Author URI: http://dawnp.sgedu.site
License: GPL2
*/

//code starts here

//function to add the Facebook SDK to WordPress. Function is from developers.facebook.com and
// inserted using WP actions
?>
function fb_sdk(){

    $version = '2.9';
    $appid='';

    if ($version) $opts = '&version=v' . $version;
    if ($appid) $opts .= 'appId=' . $appid;
    <div id="fb-root"></div>
    <script>(function (d, s, id){
        var js, fjs = d.getElementsByTagNames(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1<?php echo $opts; ?>";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', facebook-jssdk'));
    </script>
}
<?php
add_action('wp_head', 'fb_sdk');