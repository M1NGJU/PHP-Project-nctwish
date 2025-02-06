<?php
include 'config.php'; // API 키 저장된 파일 포함

$channelId = "UCiZqWVAeChfqlom5ZPR3ZJA"; // 유튜브 채널 ID (변경 가능)
$maxResults = 5; // 가져올 최신 동영상 개수

// API 요청 URL
$url = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&type=video&channelId={$channelId}&maxResults={$maxResults}&key={$apiKey}";

// API 호출 (cURL 사용)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// JSON 데이터 파싱
$data = json_decode($response, true);

// 동영상 출력
if (!empty($data['items'])) {
    foreach ($data['items'] as $item) {
        $videoId = $item['id']['videoId'];
        $title = $item['snippet']['title'];
        $thumbnail = $item['snippet']['thumbnails']['medium']['url'];
        $videoUrl = "https://www.youtube.com/watch?v=" . $videoId;

        echo '<div class="col-md-4 col-sm-6 col-12">';
        echo '<div class="card mb-3">';
        echo "<a href='{$videoUrl}' target='_blank'>";
        echo "<img src='{$thumbnail}' class='card-img-top' alt='{$title}'>";
        echo "</a>";
        echo "<div class='card-body'><h6 class='card-title'>{$title}</h6></div>";
        echo "</div>";
        echo '</div>';
    }
} else {
    echo "<p>유튜브 동영상을 불러올 수 없습니다.</p>";
}
?>
