<?php
class delete extends config
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function deleteTask()
    {

        $con = $this->con();

        $sql = "DELETE FROM `tbl_review` WHERE `id` =$this->id";

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
