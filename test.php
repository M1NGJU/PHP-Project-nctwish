<?php

include 'config.php'; // config.php 파일을 불러옴
$channelId = "UCiZqWVAeChfqlom5ZPR3ZJA";
$maxResults = 5;

$url = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId={$channelId}&maxResults={$maxResults}&key={$apiKey}";

// cURL을 사용하여 API 호출
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// JSON 데이터 파싱
$data = json_decode($response, true);

// 데이터 출력
if (!empty($data['items'])) {
    foreach ($data['items'] as $item) {
        $videoId = $item['id']['videoId'];
        $title = $item['snippet']['title'];
        $thumbnail = $item['snippet']['thumbnails']['medium']['url'];
        $videoUrl = "https://www.youtube.com/watch?v=" . $videoId;

        echo "<div>";
        echo "<h3>{$title}</h3>";
        echo "<a href='{$videoUrl}' target='_blank'><img src='{$thumbnail}' alt='{$title}'></a>";
        echo "</div>";
    }
} else {
    echo "동영상을 찾을 수 없습니다.";
}

?>