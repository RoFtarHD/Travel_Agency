<?php



require 'connection.php';

$app = new \atk4\ui\App('Travel Agency');

$app->initLayout('Admin');
require 'visual.php';


$crud = $app->layout->add('Crud');

$crud->setModel(new Place($db));
