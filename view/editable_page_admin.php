
<?php

include_once 'header.php';
include_once 'topline.php';
include_once 'nav.php';

if ($pages):

foreach ($pages as $page):
?>
<form action="" method="post">
    <input value = "<?=$page['id']?>" type="text" hidden name="id">
    <input value = "<?=$page['title']?>" type="text" placeholder="title" name="title">
    <input value = "<?=$page['text']?>" type="text" placeholder="text" name="text">
    <input value = "<?=$page['author']?>" type="text" placeholder="author" name="author">
    <input type="submit" value="save" name="update">
    <input type="submit" value="delete" name="del">
</form>
<?php endforeach; endif; ?>


<form action="" method="post">
    <input required type="text" placeholder="title" name="title">
    <input required type="text" placeholder="text" name="text">
    <input required type="text" placeholder="author" name="author">
    <input required type="submit" value="save" name="pages">
</form>


<?php
include_once 'footer.php';
?>