<?php
if(isset($_REQUEST["submit"]))
{
    $filename= $_FILES["fname"]["name"];
    $f= explode(".",$filename);
    
    $ext= end($f);
    
    $php_path=$_FILES["fname"]["tmp_name"];
    
    $path= "http://ourdesigngroup.com/photos/new ";
    
    if($ext='jpg'||$ext='jpeg'||$ext='png')
    {
        move_uploaded_file($php_path, $path);
    }
 else {
         echo "invalid";
 }
    }
?>





<html>
    <head>
        <title>File_upload</title>
   </head>
   <body>
       <form method="post" enctype="multipart/form-data">
           <table align="center" cellpadding="10" border="1">
               <tr>
                   <td>Filename</td>
                   <td><input type="file" name="fname" id="fname"></td>
               </tr>
          
               <tr>
                   <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="upload"></td>
               </tr>
           </table>
           
       </form>
   </body>
</html>
