
<?php
$db = mysqli_connect('localhost', 'root', '', 'farmers_portal') or die ("Error connecting to Database".$db->connect_error);
if(!$db)
{
                            echo '<script language="javascript">';
                            echo 'alert("error")';
                            echo '</script>';
}

?>