<?php
class execute
{
    function execute()
    {
        try {
            $serverName = "acomit.office-on-the.net";
            $connectionOption = array("Database" => "dayan_org", "Uid" => "sa", "PWD" => "acom49339");

            $conn = sqlsrv_connect($serverName, $connectionOption);
            if ($conn == false)
                die(formatErrors(sqlsrv_errors()));
        } catch (exception $e) {
            echo ("Errors!");
        }
    }
}
