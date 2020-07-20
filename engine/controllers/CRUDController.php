<?php
/**
*
* @author   Daniel Silva
* @version  -
* @package  -
* @access   Public
* @date     06-05-2020
* @description  Controller to edit all CV and Profile content (CRUD Controller)
*
*/

require("CRUDController.Interface.php");

class CRUDManagment implements iCRUDManagment {
  /* ATTRIBUTES */
    private $db;

    function __construct(){

      // DB Connection PDO
      $this->db = DB::getInstance();
      $this->db = $this->db->getConnection();

    }

  /* METHODS */
  public function Insert($table, $params){

    $f_var = $table.'(';
    $s_var = "VALUES(";

    $x = 1;
    foreach ($params as $key => $value) {
      $s_var .= ($x == count($params))? $key : $key.',';
      $f_var .= ($x == count($params))? str_replace(':', '', $key) : str_replace(':', '', $key).',';
      $x++;
    }
    $f_var .= ")";
    $s_var .= ")";

    try {
        $stmt = $this->db->prepare("INSERT INTO ".$f_var.$s_var);
        $stmt->execute($params);

        return 1;
    } catch (\Exception $e) {

    }

  }
  public function Update($table, $params, $cond = null){
      // "UPDATE table SET params WHERE cond"
      $sql = "UPDATE ".$table." SET ";

      $x = 1;
      foreach ($params as $key => $value) {
        if($x != count($params)) $sql .= str_replace(':', '', $key)."=".$key.", ";
        else $sql .= str_replace(':', '', $key)."=".$key;

        $x++;
      }

      if($cond != null)
        $sql .= " WHERE ".$cond;

      try {

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        return 1;
      } catch (\Exception $e) {

      }


    }

  public function Delete($table, $id){
      try {
        $stmt = $this->db->prepare("DELETE FROM ".$table." WHERE id = ?");
        $stmt->execute(array($id));

        return ;

      } catch (\Exception $e) {

      }

    }

  public function GetAll($table){
          try {
            $stmt = $this->db->prepare("SELECT * FROM ".$table." ORDER BY id DESC");
            $stmt->execute();

            return $stmt->fetchAll();

          } catch (\Exception $e) {

          }


        }
  public function GetById($table, $id){
      try {
        $stmt = $this->db->prepare("SELECT * FROM ".$table." WHERE id = ?");
        $stmt->execute(array($id));

        return $stmt->fetch(PDO::FETCH_ASSOC);

      } catch (\Exception $e) {

      }
    }


  function __destruct(){}
}

?>
