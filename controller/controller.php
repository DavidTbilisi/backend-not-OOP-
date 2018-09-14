<?php
$pages = select('* from pages');

foreach ($pages as $i => $v):
    if ($v['id'] > 5):
        del($v['id']);
    endif;
endforeach;