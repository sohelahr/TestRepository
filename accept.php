<?
$a=$_POST['t1'];
$db=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
if(!$db)
	echo"Data base is not connected!!";
	
$sql="SELECT * from movie,actor,act_mov where actor.ano=act_mov.ano and movie.mno=act_mov.ano and name='$a';";

$ret=pg_query($db,$sql);
if(!$ret)
{
echo pg|_last_error($db);exit;
}
else
{
while($row=pg_fetch_row($ret))
	echo $row[1]."<br>";
}
?>