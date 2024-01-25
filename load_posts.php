<?php
$posts = file("forum_posts.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($posts as $post) {
    echo '<div class="post"><p>' . htmlspecialchars($post) . '</p></div>';
}
?>
