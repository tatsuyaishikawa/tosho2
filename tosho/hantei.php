<html>
 <body>
<?php
   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   $requ='select * from uza where id=1';

   if(!$requ){
     echo "ji";
   }
   
   $resu=mysql_query($requ) or die();

   $cou=0;
   while($row=mysql_fetch_array($resu)){
        /*if($row[0]==$_POST['ident'] && $row[1]==$_POST['pass'])*/

        if($row[0]== $_POST['ident'] ||  $row[1]==$_POST['pass']){ 
	
	/*echo "<p>".$row[0]." ".$row[1]."</p>";*/
        /* allow to login to page */
	
	/* database  pre register processu */
	$requ1="insert into kashidashi values(random,0,$_POST['ident'],"","","");";
	$resu=mysql_query($requ1);
	mysql_exec($resu);
	 header('Location: main.php');
	}
   }
   /* login procedure */
   /* rediriger vers une autre page erreur error.php*/
   include("error.php");
   mysql_free_result($resu);
   mysql_close($bd);
  ?>
 </body>
</html>
