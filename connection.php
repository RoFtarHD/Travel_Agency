<?php



require '../vendor/autoload.php';

$db = new \atk4\data\Persistence_SQL('mysql:dbname=main;host=localhost','root','');



class Place extends \atk4\data\Model {

  public $table = 'places';

  function init() {

      parent::init();

      $this->addField('name',['caption'=>'Place','required'=>TRUE]);

      $this->hasMany('User',new User);



  }

}

class User extends \atk4\data\Model {

  public $table = 'records';

  function init() {

      parent::init();

      $this->addField('name',['caption'=>'Name','required'=>TRUE]);

      $this->addField('surname',['caption'=>'Surname','required'=>TRUE]);

      $this->addField('e_mail',['caption'=>'Email','required'=>TRUE]);

      $this->addField('phone_number',['caption'=>'Phone Number','required'=>TRUE,'default'=>'+','type'=>'integer']);

      $this->addField('departure_date',['caption'=>'Depart Date','required'=>TRUE,'type'=>'date']);

      $this->addField('arrival_date',['caption'=>'Arrival Date','required'=>TRUE,'type'=>'date']);

      $this->hasOne('places_id',new Place)->addTitle();

  }

}
