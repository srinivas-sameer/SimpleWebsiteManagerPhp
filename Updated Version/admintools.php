<?php include "header/header.html" ?>

<body>
 <div>
  <h2>Your content!</h2>
   <form action="">
     <div>
       <input type="text" placeholder="title" name="title">
     </div>
     <div>
         <select name="type">
             <option value="articles">Articles</option>
             <option value="tutorials">Tutorials</option>
             <option value="codesnippets">CodeSnippets</option>
         </select>
     </div>
     <div>
       <textarea cols="50" rows="10" name="content">

       </textarea>
     </div>
     <input type="submit">
  </form>
 </div>
</body>

<?php

if(isset($_GET["type"])){
    extract($_REQUEST);
    $type=$_GET["type"];
    $title=$_GET["title"];
    $file=fopen("$type/$title.html","a");
    fwrite($file,$content);
}
?>

<?php include "footer/footer.html" ?>