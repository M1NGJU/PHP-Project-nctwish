<?php
include 'config.php'; // API 키 저장된 파일 포함

$channelId = "UCiZqWVAeChfqlom5ZPR3ZJA"; // 유튜브 채널 ID (변경 가능)
$maxResults = 8; // 가져올 최신 동영상 개수

// API 요청 URL
$url = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&type=video&channelId={$channelId}&maxResults={$maxResults}&key={$apiKey}";

// API 호출 (cURL 사용)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if (!empty($data['items'])) {
    foreach ($data['items'] as $item) {
        $videoId = $item['id']['videoId'];

        echo '<div class="youtube-video">';
        echo "<iframe src='https://www.youtube.com/embed/{$videoId}' frameborder='0' allowfullscreen></iframe>";
        echo '</div>';
    }
} else {
    echo "<p>유튜브 동영상을 불러올 수 없습니다.</p>";
}
?>
