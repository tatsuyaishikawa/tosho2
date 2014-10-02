<html>
 <body>
<?php
 session_start();
 if(!isset($_SESSION['id'])){
  header("Location: login.php");
 }	
	$count=0;
        $ide=$_POST['shinki_ident'];
        $pass=$_POST['shinki_pass'];
   $bd=mysql_connect("127.0.0.1","root","agreable");
   mysql_select_db('tosho',$bd);
	/* 重複データの有無の確認*/
   $requ='select * from yuza';
   $resu=mysql_query($requ);

   while($row=mysql_fetch_array($resu)){
        if($row[0] == $ide || $row[1] == $pass){
	 $count++;
	 echo $row[0];
	}
   }

   if(count==0){
    $requ="insert into yuza (user_id,pass,admi) values('$ide','$pass','')";
    mysql_query($requ);
    mysql_close($bd);
    header('Location: kanryo.php');
   } else{ 
    mysql_close($bd);
    include("error.php");
   }
  ?>
 </body>
</html>
