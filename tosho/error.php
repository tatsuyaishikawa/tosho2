 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  </head>
  <body>
   <form>
    <?php

 session_start();

 if($_SESSION['id']==1){
  $modoru="main_admin.php";
 }  else{
  $modoru="main.php";
 }


  echo $param;
  exit();

  switch($param){
	case 1:
		echo "ユーザＩＤまたはパスワードが正しくありません。";
    		echo "<a href=\"login.php\"><input type=\"button\" value=\"戻る\" /></a>";
		exit();
	case 2:	
		echo "指定されたユーザは存在しません。";
    		echo "<a href=\"sakujo_user.php\"><input type=\"button\" value=\"戻る\" /></a>";

	case 3:	
		echo "指定された書籍は存在しません。";
    		echo "<a href=\"sakujo_book.php\"><input type=\"button\" value=\"戻る\" /></a>";

	case 4:	
		echo "IDまたはtitleが正しくありません。";
    		echo "<a href=\"$modoru\"><input type=\"button\" value=\"戻る\" /></a>";

	case 5:	
		echo "IDまたはtitleが既に存在します。";
    		echo "<a href=\"$modoru\"><input type=\"button\" value=\"戻る\" /></a>";

	case 6:	
		echo "IDまたはtitleが既に存在します。";
    		echo "<a href=\"$modoru\"><input type=\"button\" value=\"戻る\" /></a>";

	default: break;
  }

    echo "<a href=\"$modoru\"><input type=\"button\" value=\"戻る\" /></a>";
    ?>
   </form>
  </body>
 </html>
