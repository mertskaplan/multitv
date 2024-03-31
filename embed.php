<?php
/*
    Name: Multi TV - Embed
    Version: 1.0.0
    Author: Ramazan Sancar, ramazan@ramazansancar.com.tr
    Licence: MIT Licence - https://github.com/ramazansancar/mertskaplan_multitv/blob/main/LICENSE
    Source: https://github.com/ramazansancar/mertskaplan_multitv
*/

/**
 * https://www.youtube.com/feeds/videos.xml?user=[username]
 * https://www.youtube.com/feeds/videos.xml?channel_id=[channelId]
 * 
 * Source Code: <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.youtube.com/feeds/videos.xml?channel_id=[channelId]">
 */

<?php
include('get.php'); // Canlı yayın linki almak için get.php dosyasını kullanıyoruz. getVideoId() fonksiyonu ile YouTube kanalının canlı yayın linkini alıyoruz.
$root = 'http://localhost/multitv/';
$channelId = isset($_GET['channelId']) ? $_GET['channelId'] : null;
$username = isset($_GET['username']) ? $_GET['username'] : null;
$channelName = isset($_GET['channelName']) ? $_GET['channelName'] : null;
$autoplay = isset($_GET['autoplay']) ? $_GET['autoplay'] : "1";
$mute = isset($_GET['mute']) ? $_GET['mute'] : "1";
$videoId = json_decode(getVideoId(["channelId" => $channelId, "username" => $username]))->data->videoId;

echo '<style>body{margin:0px;}</style><iframe class="" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/'. $videoId .'?autoplay='. $autoplay .'&mute='. $mute .'" title="'. $channelName .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
?>