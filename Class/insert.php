<?php
class insert extends config
{
    public $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function insertTask()
    {

        $con = $this->con();

        $sql = "INSERT INTO `tbl_review`(`comment`)VALUES('$this->task')";

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
