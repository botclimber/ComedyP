<?php

interface iCRUDManagment{

  /*

  $table = db table where data ifelse               -> string
  $params = data to be manipulated                  -> array
  $cond = some condition if necessarys (ex: id = 1) -> string

  */

  public function Insert($table, $params ); // insert into DB
  public function Update($table, $params, $cond = null); // update DB data, cond null by default
  public function Delete($table, $id); // delete data from DB
  public function GetAll($table); // get All Data from DB
  public function GetById($table, $id); // get All data from DB by some specific ID

}

?>
