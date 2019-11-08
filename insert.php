<?php
class insert
{
 function InsertDate
 {
try
{
$conn = openConnection();
$Insql="INSERT () OUTPUT  INSERTED.productId VALUES()";
$insertReview = sqlsrv_query($conn,$Insql);
if($insertReview == FALSE)
die(FormatErrors(sqlsrv_query()));
echo " INSERTED DATE IS :";
while($row = sqlsrv_feth_array($insertReview, SQLSRV_FETCH_ASSOC))
{
    echo($row['']);
}
sqlsrv_feth_stmt($insertReview);
sqlsrv_close($conn);
}
catch(Ex)
 }
}
?>