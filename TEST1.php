<html>
<body>

<?php
//mail("balaks611@gmail.com","TEST","message", "From: balaks6114w@gmail.com");
$test=2;
if ($test>1)
{
trigger_error("Value must be 1 or below");
}
die();
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
     if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
  }
function testing()
{
for ($i=1;$i<=10;$i=$i+1)
{
echo "Hello World</br>";
}
echo "DATE : ".date("m/d/Y")."</br>";
$tomorrow=mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow : ".date("y/m/d",$tomorrow);
$file =fopen("TEST.txt","r");
echo "</br> FILE : ".$file;
while(!feof($file))
{
    echo fgets($file)."</br>";    
}
fclose($file);

}
testing()
?>
<script language="javascript">
function testingva()
{   
    alert("test"); 
    var url="<?php echo $_SERVER[PHP_SELF];?>?action=phpFunction";
    window.open(url, "_self");
    alert("TEST");
}
</script>
<form action="TEST.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>