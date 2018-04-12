<?php
require_once('./library/driver.php');
require_once('./library/fileAdd.php');
if(isset($_POST["add"])){
    if (!empty($_POST)) {
        $errors = [];
        if (empty($_POST['name'])) {
            $errors['name'] = 'Поле не может быть пустым';
        }
        if (empty($_POST['text'])) {
            $errors['text'] = 'Поле не может быть пустым';
        }
        if (strlen($_POST['name']) > 255) {
            $errors['name'] = 'Имя содержит 255 символов';
        }
        if (empty($errors) && empty($_POST['id'])) {
            $article = $_POST;
            $article['id'] = uniqid();
            $article['image'] =   upload($article['id']);
            if (save($article)) {
                header("Location: https://floating-sierra-58793.herokuapp.com/index.php?action=news");
            }
        }
    }
}
$page = './views/add.php';
$title = 'add';
