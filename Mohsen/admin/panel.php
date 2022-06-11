<html>

<head>
<title></title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <LINK rel=stylesheet type=text/css href="../style.css">
</head>

<BODY background="../pagebg.gif">

<?php
@$u=$_REQUEST['use'];
@$p=$_REQUEST['pas'];
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query="select * from log";
$result=mysql_query($query);
?>
<br /><br />
<TABLE width=800 align=center bgcolor=#FFCC00>
<TR valign=center>
<TD width=200><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<FONT style="font-size:8pt" face="Tahoma">
<?php
while($row=mysql_fetch_array($result))
 {
	if($u==$row['user'] && $p==$row['ps'])
      {
      echo "مدير سيستم";
?>

</DIV>
</FONT>
</TD>
<TD width=600>

</TD>
<TD width=200><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<DIV align=right>
<form name="" action="ad-con.php" method="post">
<input type="submit" value="مشاهده درخواست">
<input name="use" type="hidden" value=<?php echo $u; ?> >
<input name="pas" type="hidden" value=<?php echo $p; ?> >
</form>
</TD>
<TD><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<form name="" action="bonu.php" method="post">
<input type="submit" value="تعداد اتاق ها">
<input name="use" type="hidden" value=<?php echo $u; ?> >
<input name="pas" type="hidden" value=<?php echo $p; ?> >
</form>
</TD>
<TD><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<form name="" action="bonus.php" method="post">
<input type="submit" value="ثبت قيمت ها">
<input name="use" type="hidden" value=<?php echo $u; ?> >
<input name="pas" type="hidden" value=<?php echo $p; ?> >
</form>
</TD>
<TD><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<form name="" action="panel.php" method="post">
<input type="submit" value="صفحه اصلي">
<input name="use" type="hidden" value=<?php echo $u; ?> >
<input name="pas" type="hidden" value=<?php echo $p; ?> >
</form>
</TD>
<TD><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<form name="" action="../index.php" method="post">
<input type="submit" value="بازگشت">
</form>
</TD>

</DIV>
</FONT>
</TD>
</TR>
<TR valign=center bgcolor=#FFFF99>
<TD align=center colspan=5 width=800><FONT style="font-size:8pt" color=#000000 face="Tahoma">
<br />
<TABLE style="font-size:8pt" color=#000000 face="Tahoma" bgcolor=#FFCC00 border=1>
<TD align=right>&nbsp;&nbsp;تعداد اتاق خالي&nbsp;&nbsp;</TD>
<TD align=right>&nbsp;&nbsp;قيمت&nbsp;&nbsp;</TD>
<TD align=right>&nbsp;&nbsp;نوع سرويس&nbsp;&nbsp;</TD>
<?php
$query1="select * from product";
$result1=mysql_query($query1);
while($row1=mysql_fetch_array($result1))
 {

?>
<TR>
<TD align=center>
<?php echo $row1['t']; ?>
</TD>
<TD align=center>
<?php echo $row1['price']; ?>
</TD>
<TD align=center>
<?php echo $row1['name']; ?>
</TD>

<?php } ?>
</TR>
</TABLE>
<br />
&copy; 2022.
</DIV>
</FONT>
</TD>
</TR>
</TABLE>

</body>
<?php
      }
else
{
echo "<meta http-equiv=refresh content=0;url=index.php>";	}
 }

 ?>
</html>