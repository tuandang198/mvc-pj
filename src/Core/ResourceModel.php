<?php

namespace MVC\Core;

use MVC\Config\Database;
use MVC\Core\Model;

class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->model = $model;
        $this->id = $id;
    }

    public function save($model)
    {
        $arrayModel = (new Model())->getProperties($model);
        $strKey = '';
        $strValue = '';
//        var_dump($arrayModel);die;
        if($arrayModel["id"] == null){
            unset($arrayModel['id']);
            foreach ($arrayModel as $key => $value){
                $strKey.=$key.',';
                $strValue.= ':' . $key.',';
            }
            $strValue=trim($strValue,',');
            $strKey=trim($strKey,',');
            $sql = "INSERT INTO $this->table ($strKey) VALUES ($strValue)";
        } else{
            foreach ($arrayModel as $key => $value){
                $strValue.= $key . '=' . ':' . $key.', ';
            }
            $strValue=trim($strValue,', ');

            $sql = "UPDATE $this->table SET $strValue WHERE $this->id = :id ";
        }


        $req = Database::getBdd()->prepare($sql);
        return $req->execute($arrayModel);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE $this->id = $id";
        var_dump($sql);
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return($req->fetchAll());

    }

    public function getId($id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->id=$id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetch());

    }


}