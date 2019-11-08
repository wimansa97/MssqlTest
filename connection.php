<?php
class connection
{
    function openConnection()
    {
        try {

            $serverName = "acomit.office-on-the.net";
            $connectionOption = array("Database" => "dayan_org", "Uid" => "sa", "PWD" => "acom49339");

            $conn = sqlsrv_connect($serverName, $connectionOption);

            if ($conn == false)
                die(FormatErrors(sqlsrv_error()));
            else
                return $conn;
        } catch (Exception $e) {
            echo ("Error!");
        }
    }
}


