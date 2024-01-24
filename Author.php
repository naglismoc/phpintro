<?php
class Author
{
    private $id;
    private $name;
    private $surname;

    function __construct($id = 0, $name = "", $surname = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->id . " " . $this->name . " " . $this->surname;
    }

    public function initials()
    {
        return $this->name[0] . $this->surname[0];
    }
    public static function classIntro() {
        return "Ši klasė skirta kurti autorių objektams";
    }
}
