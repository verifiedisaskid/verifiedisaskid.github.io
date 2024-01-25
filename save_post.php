<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postContent = $_POST["post-content"];

    echo "Received post content: " . $postContent; // Add this line for debugging

    if (!empty($postContent)) {
        $file = fopen("forum_posts.txt", "a");
        fwrite($file, $postContent . PHP_EOL);
        fclose($file);
    }
}

header("Location: forums.html");
exit();
?>