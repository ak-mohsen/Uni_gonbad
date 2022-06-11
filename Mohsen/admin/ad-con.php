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
<div align=center>
<TABLE align=center bgcolor=#FFCC00 border=1>
<TR valign=top>

<?php
	include('ps_pagination.php');
	$conn = mysql_connect("localhost","root");
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('hotel', $conn);
	if(!$status) die("Failed to select database!");
	$sql = 'SELECT * FROM rezerv';
	$pager = new PS_Pagination($conn, $sql, 10, 5, "param1=valu1&param2=value2");
	$pager->setDebug(true);
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
?>
<TABLE bgcolor=#FFFFFF border=1 align="center">
<TR valign=top>
<TD width=100><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>پذيرش</DIV>
</FONT>
</TD>
<TD width=100><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>نوع اتاق</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">

<DIV align=center>تعداد اتاق</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>مدت</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>تاريخ ورود</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>پست الکترونيکي</DIV>

</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>کد شناسه</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>نام و نام خانوادگي</DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center>رديف</DIV>
</FONT>
</TD>

<?php
while($row=mysql_fetch_array($rs))
{

 ?>
</TR>
<TR valign=top>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['val']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['suit']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['suitmulti']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['out']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['vorod']; ?></DIV>
</FONT>

</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['email']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['mobile']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['name']; ?></DIV>
</FONT>
</TD>
<TD><FONT style="font-size:10pt" color=#000000 face="Tahoma">
<DIV align=center><?php echo $row['fm']; ?></DIV>
</FONT>
</TD>

 <?php
    }
 ?>

</TR>
</TABLE><br /><br />
<?php
echo $pager->renderFullNav();
?>   <br /><br />
</TABLE>

</body>
<?php
      }
else
{
echo "<meta http-equiv=refresh content=0;url=index.php>";
	}
 }

 ?>
</html>