<?php 
ob_start();
 
    include 'header.php';  
    include 'controllers/con_reg_code_details.php'; 


    if (isset($_POST['deleteBox'])) {
        
        $box = $_POST['deleteBox'];
        
        $obj1 = new con_reg_code_details();    
        $message = $obj1->code_status($box);
        echo $message;

        // foreach ($box as $value) {
        //     // echo "<ul><li>".$value."</li></ul>";
        //     $conn= open_db_connection();
        // $sql = "DELETE FROM registration_code_tb WHERE reg_code_row_id='$value' ";

        //     if ($conn->query($sql) === TRUE) {
        //         $_SESSION["SuccessMessage"]= "admin Deleted Successfully";
        //         header("Location:dashboard.php");
        //     } else {
        //         echo "Error deleting record: " . $conn->error;
        //     }
        // }

    }

?>

        <!-- ALERT  -->
        <?php echo Message(); 
            echo SuccessMessage();
        ?>

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">View Epin</h4><br>

                            <form action="" method="POST">

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                <div class="pull-left">
                                    <button type="submit" name="delete" class="btn btn-info">Assign</button>
                                </div>

                                <thead>

                                <tr>
                                    <th><input type="checkbox" id="selectAllBox"></th>
                                    <th>Date Generated</th>
                                    <th>Registration Code</th>
                                    <th>Generated By</th>
                                    <th>Used Status</th>
                                    <th>Used By</th>
                                    <th>Status</th>
                                </tr>
                                </thead>


                                <tbody>
                                    
                                    <?php
                                      $obj = new Con_reg_code_details();
                                      echo  $obj->reg_code_details();
                                   ?>

                                </tbody>
                            </table>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->


    </div> <!-- Page content Wrapper -->

</div> <!-- content -->


        
<?php include('footer.php'); ?>