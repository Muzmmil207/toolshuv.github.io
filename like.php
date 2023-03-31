<?php

// Track the like click by incrementing the like count in a file or database

$likeCount = file_get_contents('like_count.txt');

$likeCount++;

file_put_contents('like_count.txt', $likeCount);

?>

