<?php
class edit extends config
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function editTask()
    {

        $con = $this->con();

        $sql = "UPDATE `tbl_review` SET `status`= 'COMPLETED',`date_posted`=NOW() WHERE `id` = '$this->id'";

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
