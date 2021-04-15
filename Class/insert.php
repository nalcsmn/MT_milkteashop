<?php
class insert extends config
{
    public $name;
    public $comment;

    public function __construct($name,$comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }


    
    public function insertTask()
    {

        $con = $this->con();

        $sql = "INSERT INTO tbl_review(namez,comment)VALUES('$this->name','$this->comment')";

        $data = $con->prepare($sql);
        // var_dump($data);
        // die();

        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
