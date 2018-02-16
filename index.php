<?php



require 'connection.php';



$app = new \atk4\ui\App('Travel Agency');

$app->initLayout('Admin');
require 'visual.php';



$form = $app->layout->add('Form');

$form->setModel(new User($db));




/*$form->onSubmit(function ($form) {

  $form->model->save();

  return new \atk4\ui\jsExpression('document.location = "index.php" ');

});*/
