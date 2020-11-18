<?php
// виды это шаблон содержимого страницы, а шаблон - общий шаблон для нескольких страниц

// виды, которые рендерятся из контроллера, по умолчанию должны распологаться в папке
// app/views/controllerID, где controllerID это id контроллера
// ArticleController => app/views/article

// в layouts общие правила отображения
$this->params['pagehead'] = 'Go!';

// задать блок или нет, а в шаблоне прописать правила отображения
$this->beginBlock('articlehead');
    echo 'тут заголовок статьи<br>';
$this->endBlock();

echo 'show all articles';
var_dump($articles);