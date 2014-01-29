<?php

require_once "socialsharecount.php";

$url = 'http://techcrunch.com';

$socialShareCount=new SocialShareCount($url);

$facebookCount = $socialShareCount->getFacebookCount();
echo 'Facebook share: ' . $facebookCount['share_count'];
echo '<br>Facebook like: ' . $facebookCount['like_count'];
echo '<br>Facebook comment: ' . $facebookCount['comment_count'];
echo '<br>Facebook total: ' . $facebookCount['total_count'];

echo '<br>Twitter count: ' . $socialShareCount->getTweetCount();
echo '<br>Googleplus count: ' . $socialShareCount->getGooglePlusCount();
echo '<br>Linkedin count: ' . $socialShareCount->getLinkedinShareCount();
echo '<br>Pinterest count: ' . $socialShareCount->getPinterestShareCount();
echo '<br>Delicious count: ' . $socialShareCount->getDeliciousShare();
