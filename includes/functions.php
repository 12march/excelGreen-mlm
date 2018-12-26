<?php

/*=============================================
        Error & Success Message
=============================================*/
    //error message
    function Message(){
        if(isset($_SESSION["ErrorMessage"])){
            $Output =" <div class=\"alert alert-danger\">";
            $Output .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
            $Output .= htmlentities($_SESSION["ErrorMessage"]);
            $Output .= "</div>";
            $_SESSION["ErrorMessage"]=null;
            return $Output;
        }
    }

    //success message
    function SuccessMessage(){
        if(isset($_SESSION["SuccessMessage"])){
            $Output = "<div class=\"alert alert-success\">";
            $Output .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
            $Output .= htmlentities($_SESSION["SuccessMessage"]);
            $Output .= "</div>";
            $_SESSION["SuccessMessage"] = null;             
            return $Output;
        }
    }


/*=============================================
         CONFORM LOGIN
=============================================*/
    //Page Restriction if not loged in
    function login(){
        if(isset($_SESSION['admin_id'])){
            return true;
        }
    }

    function confirm_login(){
        if (!login()){
            $_SESSION['ErrorMessage']="Login Required";
            header("Location:index.php");
        }
    }
