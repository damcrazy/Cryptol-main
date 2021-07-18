<?php
	session_start();
	require_once('../Users/db_conn.php');
	//phpinfo();

    if(isset($_POST['update']))
    {
        @$dbname = 'users';
        @$username=$_SESSION['user_name'];
        @$val=$_POST['val'];
        @$cur=$_POST['cur'];
        $query = "select $cur from $dbname where user_name='$username'";
        $cur_ha=mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($cur_ha);
        $now = $row[$cur] + $val;
        $query = "update $dbname set $cur='$now' where user_name='$username'";
        $query_run = mysqli_query($conn,$query);
        header( "Location: ./Exchange.html");
    }
?>

