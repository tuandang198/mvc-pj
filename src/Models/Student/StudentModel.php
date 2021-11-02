<?php

namespace MVC\Models\Student;

use MVC\Core\Model;

class StudentModel extends Model
{
    protected $name;
    protected $gender;
    protected $created_at;
    protected $updated_at;
    protected $id;

    /**
     * @param $name
     * @param $gender
     * @param $created_at
     * @param $updated_at
     * @param $id
     */
    public function __construct($name, $gender, $created_at, $updated_at, $id)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}