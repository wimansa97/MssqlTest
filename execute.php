<?php
include './connection.php';
class execute
{
    var $con;
    var $c;
    function getUsers()
    {
        $this->c = new connection();
        $this->con = $this->c->openConnection();

        try {
            $tsql = "SELECT UserName FROM dbo.Users";  
            $getuser = sqlsrv_query($this->con, $tsql);  
            if ($getuser == FALSE)  
                die(FormatErrors(sqlsrv_errors()));  
            $productCount = 0;  
            while($row = sqlsrv_fetch_array($getuser, SQLSRV_FETCH_ASSOC))  
            {  
                echo($row['UserName']);  
                echo("<br/>");  
                $productCount++;  
            }  
            echo $productCount;
            sqlsrv_free_stmt($getuser);  
            sqlsrv_close($this->con);  
         } catch (exception $e) {
            echo ("Errors!");
        }
    }
}
