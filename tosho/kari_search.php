<!DOCTYPE>
<html>
 <head>
 <title>借りる本を検索</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="pub_search.css" type="text/css">


 <script type="text/javascript">
  function match_values(){
   /* open db */
   
   /* obtenir des valeurs et les mettre dans var buffer*/
 
   /* while,if matches, handle action page. if not, display red texte on "errN" tag  */
  }

 </script>
 </head>
 
 <body>
  <div id="iti">
   <div id="yon">
   借りる本を検索
   </div>
  <div id="kensaku">

   
   <div id="san">
  検索項目
   </div>
　  <form  action="kari_kekka.php" method="POST">
     図書ID：<input type="text" name="bookid"/><div id="err1"></div></br>
    <!-- タイトル：<input type="text" name="title"/></br>
     ISBN：<input type="text" name="isbn"/></br>
     分類:<input type="text" name="genre" /></br>
     著者名:<input type="text" name="author" /></br>-->
     <input type="submit" value="検索" onclick="match_values()"/>
     <input type="reset" value="クリア"/>
     <input type="button" value="戻る" />
    </form>
   </div>

  <div id="kekka">
   <table border="1" color="black" onmousemove="irogae()" id="teburu">
    <tr bgcolor="blue" color="white"><td>一覧結果</td></tr>
    <tr bgcolor="orange"><td>図書名</td><td>著者</td><td>ISBN-13</td><td>出版年</td><td>購入年</td><td>貸し出し状況</td></tr>
    <tr ><td>初めてのjava</td><td>田中一郎</td>
        <td>ISBN-13</td><td>出版年</td><td>購入年</td><td>貸出状況</td></tr>
    <tr ><td>初めてのjava</td><td>田中一郎</td>
        <td>ISBN-13</td><td>出版年</td><td>購入年</td><td>貸出状況</td></tr>
    <tr><td>初めてのjava</td><td>田中一郎</td>
        <td>ISBN-13</td><td>出版年</td><td>購入年</td><td>貸出状況</td></tr>
    <tr><td>初めてのjava</td><td>田中一郎</td>
        <td>ISBN-13</td><td>出版年</td><td>購入年</td><td>貸出状況</td></tr>
   </table>
  </div>

　</div>
 </body>
</html>
