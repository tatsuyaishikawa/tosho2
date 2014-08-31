<html>
 <head>
 <title>図書管理システム</title>
 <link type="text/css" rel=stylesheet" href="pub_search.css" />
 <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" /> 
 <script type="text/javascript" src="./kadai1.js"></script>
 <!-- ce procedure est effectue pour finaliser l'enregistrement -->
 <?php
  function enre(){

   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   /* 1*/
    /* ① 
   $requ='select * from uza';
   $requ2='select * from books';*/

   $resu=mysql_query($requ) or die();

   $cou=0;

   while($row=mysql_fetch_array($resu)){
	/* 2*/
	 /* ② */
        if($row[0]== $_POST['ident'] ||  $row[1]==$_POST['pass']){
        }
   }

   while($row=mysql_fetch_array($resu)){
	/* 2*/
	 /* ② */
        if($row[0]== $_POST['ident'] ||  $row[1]==$_POST['pass']){
        }
   }

  /* enregistrer la date rental et la date return */
  $requ="insert into kashidashi values(";  
 ?>

 <!-- ce procedure est effectue pour enregistrer l'info de livre -->
 <?php
 
   $bd=mysql_connect("127.0.0.1","root","agreable2");
   mysql_select_db('tosho',$bd);

   /* pre register into kashidashi table */
   /* pour 1ere et 3 ieme champ , on ne rajoute rien */
  /* $requ1="insert into kashidashi values(1,$_POST['bookid'],1,$_POST['title'],"","");";*/
        $resu=mysql_query($requ1);
        mysql_exec($resu);

   include("error.php");
   mysql_free_result($resu);
   mysql_close($bd);

  }
 ?>
 </head>
 
 <body>
  <div id="iti">
   <div id="yon">
   検索結果一覧
   </div>
  </div>

<p> 
<?php
 $db=mysql_connect("127.0.0.1","root","agreable2");
 mysql_select_db('tosho',$db);

 $requ='select * from books';
 $apre=mysql_query($requ);

 $cou=0;
 
 while($row=mysql_fetch_array($apre)){
   if($cou==0){
    echo "<table border=\"10\" color=\"black\">";
    echo "<tr><td>書籍ID</td><td>書籍名</td><td>ISBN</td><td>分類</td><td>著者名</td></tr>";
   }

   if($row[0]==$_POST['bookid']){
    echo "<tr>
     <td>".$row[0]."</td>
     <td>".$row[1]."</td>
     <td>".$row[2]."</td>
     <td>".$row[3]."</td>
     <td>".$row[4]."</td>
     </tr>";
    }
   
    $cou++;
   } 

  /*echo "</table>";*/
  mysql_close($db);
?>    
 </p> 
  <?php
  echo "借りますか？";
  ?>
  <!--
  switch($_POST['modo']){
     case 1: echo "<p>借りますか？</p>";
     case 2: echo "<p>返しますか？</p>";
     default: break;
  }
  --> 
 <div >
  <form action="kanryo.php" method="POST">	
   <input type="button" value="借りる" onclick="enre()" />
   <!-- 
    switch($_POST['modo']){
     case 1: echo "借りる";
     case 2: echo "返す";
     default: break;
   } --> 
   <a href="cancel.php"><input type="button" value="取り消し" /></a>
  </form>
 </div>
 </body>
</html>

