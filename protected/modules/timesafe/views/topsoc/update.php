<?php
$this->breadcrumbs=array(
    Topsoc::modelTitle()=> array('list'),
    'Редактирование "'.$model->name_text.'"'
);
$this->renderPartial('_form', array(
    'model' => $model, 'page'=>$page
));
?>