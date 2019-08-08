<?php
require_once "../config.php";
//php controllers for different actions
// checking if user is logged in
if (!check_login() || !isset($_POST['action'])) {
    die;
}

switch ($_POST['action']) {
    case 'edit': //edit or insert article to database
    $data = array();
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : null;
    $data['category'] = isset($_POST['category']) ? $_POST['category'] : ''; //isset checks if variable is set or not
    $data['title'] = isset($_POST['title']) ? $_POST['title'] : '';
    $data['subtitle'] = isset($_POST['subtitle']) ? $_POST['subtitle'] : '';
    $data['image'] = isset($_POST['image']) ? $_POST['image'] : '';
    $data['content'] = isset($_POST['content']) ? $_POST['content'] : '';
    $data['onDate'] = isset($_POST['onDate']) ? strtotime($_POST['onDate']) : time();

        if ($data['category'] && $data['title'] && $data['content']) { //if data is set adding/editing arcticle
            $article = new Article($data);
            if ($article->id) $article->update();
            else $article->insert();
            echo json_encode(['success' => true]);
        } else { //no data
            echo json_encode(['success' => false]);
        }
        break;

    case 'delete': //delete article from database
    $article = new Article(array('id' => $_POST['id']));
    $article->delete();
    break;

    case 'approve': 
    $article = new Article(array('id' => $_POST['id'])); //this just adds to the array with new id
    $article->approve();
    break;
    case 'unactive':  //This will not show articel if not approve....
    $article = new Article(array('id' => $_POST['id']));
    $article->unactive();
    break;

    case 'getTabs': //get tab content for admin page
    $list = Article::getList($_POST['category']);
    include '../views/tabs.php';
    break;

    case 'info': //get article data by id
    $article = Article::getById($_POST['id']);
    echo json_encode($article);
    break;
}