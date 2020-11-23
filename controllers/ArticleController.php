<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\web\Controller;

// User является id контроллера
// Папка views шаблоны, называется вид, а не шаблон
class ArticleController extends Controller
{
    // по умолчанию используется шаблон main.php
    // для того чтобы использовать свой
    // можно и в экшне задавать, но принято в контроллере
    public $layout = 'stepbystep';

    public function actionArticle()
    {
        //$this->layout = 'article';
        $text = 'art';
        return $this->render('article', ['text' => $text]);
    }

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
        // статический метод find возвращает запрос, QueryBuilder() - объект который позволяет построить запрос к БД
        // а методы one или all позволяют выполнить запрос и получить либо массив объектов либо один объект указанного нами класса
        $article = Article::find()->where(['id' => $id])->all();
        var_dump($article);
    }

    public function actionShowOne()
    {
        //Выбор всех записей из таблицы Article
        //$articles = Article::find()->all(); //var_dump($articles);

        // Сортировка записей в обратном порядке
        //$articles = Article::find()->orderBy(['id' => SORT_DESC])->all();

        // Данные в виде массива. в БД выполняется только один запрос.
        //$articles = Article::find()->asArray()->all();

        // Фильтровать данные по условию
        //$articles = Article::find()->where(['title' => 'this is tests', 'id' => 3])->all();
        //$articles = Article::find()->where('id=4')->all();
        //$articles = Article::find()->where(['like', 'title', 't'])->all();
        //$articles = Article::find()->where(['>', 'id', 3])->all();
        //$articles = Article::find()->where(['title' => 'this is tests'])->limit(2)->all();
        //$articles = Article::find()->asArray()->where(['title' => 'this is tests'])->limit(1)->one();
        //$articles = Article::find()->asArray()->where(['title' => 'this is tests'])->count();
        //$articles = Article::find()->asArray()->count();
        //$articles = Article::findOne(['id' => 1] );
        //$articles = Article::findAll(['title' => 'this is tests']);

        //$sql = 'SELECT * FROM articles WHERE title LIKE \'%th%\'';
        //$articles = Article::findBySql($sql)->all();

        // Чтобы не было SQL иньекции необходимо пользоваться подготовленными запросами
        //$sql = 'SELECT * FROM articles WHERE title LIKE :search';
        //$articles = Article::findBySql($sql, [':search' => '%th%'])->all();
        $articles = Article::find()->where(['id' => 1])->all();
        var_dump($articles);
        //return 'hello, saf';
    }

    public function actionCreate()
    {
        //$res = Yii::$app->db->createCommand('SELECT * FROM articles')->queryAll();
        //$res = Yii::$app->db->createCommand('SELECT title FROM articles')->queryColumn();
        $res = Yii::$app->db->createCommand('SELECT COUNT(*) FROM articles')->queryScalar();
        var_dump($res);
    }
}