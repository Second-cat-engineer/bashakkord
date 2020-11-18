<?php

namespace app\controllers;

use yii\web\Controller;

// User является id контроллера
// Папка views шаблоны, называется вид, а не шаблон
class ArticleController extends Controller
{
    // по умолчанию используется шаблон main.php
    // для того чтобы использовать свой
    // можно и в экшне задавать, но принято в контроллере
    public $layout = 'article';

    public function actionAll()
    {
        //return 'this is all articles';
        //return $this->render('all');

        $articles = [
            'title1' => 'article1',
            'title2' => 'article2',
        ];

        return $this->render('all', [
            'articles' => $articles,
        ]);
    }

    public function actionOne($id)
    {
        return 'article: ' . $id . '!';
    }

    public function actionShowOne()
    {
        return 'hello, saf';
    }
}