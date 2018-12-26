<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */    
    
    function open_db_connection()
    {
        try
        {     
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "excelgre_forever_mlm_db";
      

        // Create connection
        $con = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($con->connect_error) {
             echo '<script type="text/javascript">alert("Connection failed.");</script>';
            die("Connection failed: " . $con->connect_error);

        } 
        
        return $con;
        
        }
        catch(Exception $e) {
             echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
  echo 'Message: ' .$e->getMessage();
}

    }
    
     function close_db_connection($conn)
    {
          try
        {
           $conn->mysql_close();
           
        }
           catch(Exception $e) {
             echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
  echo 'Message: ' .$e->getMessage();
           }
    }

