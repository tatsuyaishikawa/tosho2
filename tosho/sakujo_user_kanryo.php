<!DOCTYPE>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 </head>
 <body>
<?php
 session_start();
if(!isset($_SESSION['id'])){
  header("Location: login.php");
 }

   $id=$_POST['user_id'];

   $bd=mysql_connect("127.0.0.1","root","agreable");
   mysql_select_db('tosho',$bd);

   /*本が存在するか検索*/
   $requ='select *  from yuza';
   $resu=mysql_query($requ);

   while($row=mysql_fetch_array($resu)){
        if($row[0]==$id){
	 $requ="delete from yuza where user_id='$id'";
	 mysql_query($requ);
	 mysql_close($bd);
 	 echo "削除しました";
	}
       }
 
   echo "該当するユーザは存在しません";
  ?>
 <form>
  <a href="sakujo_user.php"><input type="button" value="削除するユーザの選択画面に戻る"/></a>
  <a href="main_admin.php"><input type="button" value="メインメニューに戻る"/></a>
 </form>
 </body>
</html>
