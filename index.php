<?php

//function to add the Facebook SDK to WordPress. Function is from developers.facebook.com
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