<html>
  <head>
    <title> dinamic pages   </title>
    <style type="text/title">
       *{
       font-family:Verdana;
       foint-size:24px;
       
       }
      #menu{
      position:abolute;
      top:50px;
      left:200px;
      
      padding:10px;
      margin:10px;
      background-color:light pink;
      }
       #me{
      position:abolute;
      top:50px;
      left:450px;
      
      padding:10px;
      margin:10px;
      
      background-color:light blue;
      color:red;
       }
       
    </style>
  </head>
  <body>
    <div id="menu">
      <a herf="index.php">home</a><br/>
      <a herf="index.php?page=js">shpe</a><br/>
      <a herf="index.php?page=csharp">about us</a><br/>
      <a herf="index.php?page=css">contact us</a><br/>
    </div>
    <div id="me">
      <h1> this dynamic page</h1>
      <?php
      $p=$_GET["page"];
      $page="sub/".$p.".php";
      if(file_exists($page))
          include($page);
      elseif($page=="")
        echo "This is home page";
      else
        echo "wrong choice";
          
         
      ?>
      
    </div>
        
  </body>
  
</html>
