<?php
$pages = select('* from pages');


if (@$_POST['register']) {
    $data = [
        'mail' => @$_POST['mail'],
        'pass' => hash('md5', @$_POST['pass']),
        'name' => @$_POST['name'],
    ];
    save('users', $data);
}

if (@$_POST['pages']) {
    $data = [
        'title'     => $_POST['title'],
        'text'      => $_POST['text'],
        'author'    => $_POST['author'],
    ];
    save('pages', $data);
}

if (@$_POST['id'] && @$_POST['update']) {
    $data = [
        'title'     => $_POST['title'],
        'text'      => $_POST['text'],
        'author'    => $_POST['author'],
    ];
    save('pages', $data, $_POST['id']);
}


if (@$_POST['del']) {
    $data = [
        'title'     => $_POST['title'],
        'text'      => $_POST['text'],
        'author'    => $_POST['author'],
    ];
    del('pages', $_POST['id']);
}
if (@$_GET['file'] == 'profile') {
    $user = select(' * from users where id = ' . $_SESSION['user_id']);
}