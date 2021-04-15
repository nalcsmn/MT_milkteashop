<?php
class view extends config{
    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_review` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
        echo "<h3 class='mb-4'>Pending Review</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
                 <th>Reviews</th>
                  <th>Action</th>
            </tr>
             </thead><tbody>";
        foreach($result as $data){
            echo "<tr>";
            echo "<td>$data[comment]</td>";
            echo "<td>
                <a class='btn btn-info btn-sm' href='testimonial.php?edit=$data[id]'> Mark as Completed</a>
                <a class='btn btn-danger btn-sm' href='testimonial.php?delete=$data[id]'> Delete Task</a>
                </td>";

            echo "</tr>";
 
        }

        echo "</tbody></table>";


    }

    public function viewCompleteData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_review` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
        echo "<h3 class='mb-4 mt-5'>Completed Task</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
            <th>name</th>
                 <th>Reviews Approved</th>
              
            </tr>
             </thead><tbody>";
        foreach($result as $data){
            echo "<tr>";
         
            echo "<td>$data[comment]</td>";
            echo "<td>$data[date_posted]</td>";
     
            echo "</tr>";

        }

        echo "</tbody></table>";


    }

    public function viewGui(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_review` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
       
        foreach($result as $data){
            echo "  <div class='container-fluid heds'>";
            echo "</div>";
            echo "    <div class='jumbotron'>";
            echo "    <h1  class='display-4 revh1'>Ma Neil LA tEA Addict!</h1>";
            echo "    <p class='lead revp'>$data[comment]</p>";
            echo "   <hr class='my-4'>";
           
            echo " </div>";
         

        }

      
        

    }

}



?>