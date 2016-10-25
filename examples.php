<?php

header('Content-type: text/plain; charset=utf-8');

// Please update xxxx with your key and yyyy with your secret
$api = new JWPlayerApi\Api('xxxxxxxx', 'yyyyyyyyyyyyyyyyyyyyyyyy');

// Here's an example call that lists all videos.
print_r($api->call("/videos/list"));

// Video details example; update zzzz with a video_key listed by the call above.
// print_r($api->call("/videos/show", array('video_key' => 'zzzzzzzz')));

// Thumbnail upload example; again replace zzzz with your video key.
/*
$response = $api->call("/videos/thumbnails/update", array('video_key' => 'zzzzzzzz'));
if ($response['status'] == "error") {
    print_r($response);
} else {
    $response = $api->upload($response['link'], "./thumbnail.jpg");
    print_r($response);
}
*/
