<!DOCTYPE>
<html>
 <head>
 <title>返す本を検索</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="pub_search.css" type="text/css">

 <script>

  function hitt(){

    if(==1){
     ①jump to kekka.html page
     ②
    }  else{
     document.getElementById('')="<style>貸出中です</style>";
  }

 </script>
 </head>
 
 <body>
  <div id="iti">
   <div id="yon">
 	返却する本を検索
   </div>
  <div id="kensaku">

   
   <div id="san">
  検索項目
   </div>
　  <form  action="kaesi_kekka.php" method="POST">
     図書ID：<input type="text" name="bookid"/></br>
    <!-- タイトル：<input type="text" name="title"/></br>
     ISBN：<input type="text" name="isbn"/></br>
     分類:<input type="text" name="genre" /></br>
     著者名:<input type="text" name="author" /></br>-->
     <input type="submit" value="検索" />
     <input type="reset" value="クリア"/>
     <input type="button" value="戻る" />
     <input type="hidden" name="modo" value="$_POST['modo']" />
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


  <form>
    <input type="button" value="検索" onClick="tugi()"/>
    <input type="reset" value="クリア"/>
    <input type="button" value="戻る" />
  </form>

　</div>
 </body>
</html>
