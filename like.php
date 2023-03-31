hp

// Track the like click by incrementing the like count in a file or database

$likeCount = file_get_contents('like_count.txt');

$likeCount++;





<?php
// Track the like click by incrementing the like count in a file or database
$likeCount = file_get_contents('like_count.txt');
$likeCount++;
file_put_contents('like_count.txt', $likeCount);
echo $likeCount;
?>

<?php
// Helper function to get the total like count
function get_like_count() {
  $likeCount = file_get_contents('like_count.txt');
  return $likeCount;
}
?>
