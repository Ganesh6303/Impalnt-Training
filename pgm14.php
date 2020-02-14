 <?php
$t = date("H");
if($t < "12")
{
echo "Have a good day" ;
}
elseif($t < "12" && $t >"16")
{
echo"good afternoon";
}
elseif($t < "16" && $t > "20")
{
echo"good evening";
}
else
{
echo"good  night";
}
?>
