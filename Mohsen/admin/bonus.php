<html>

<head>
<title></title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <LINK rel=stylesheet type=text/css href="../style.css">
</head>

<BODY background="../pagebg.gif">

<script type="text/javascript" language="javascript">
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
 </script>

<br /><br />
<?php
@$p=0;
@$u=$_REQUEST['use'];
@$p=$_REQUEST['pas'];
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query="select * from log";
$result=mysql_query($query);
?>
<TABLE width=800 align=center bgcolor=#FFCC00>
<TR valign=center>
<TD width=200><FONT style="font-size:8pt" color=#000000 face="Tahoma">
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
<TD align=center width=600> <FONT style="font-size:8pt" color=#000000 face="Tahoma">

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
<TABLE style="font-size:8pt" color=#000000 face="Tahoma" bgcolor=#FFCC00 border=1>
<br />
<TD align=right>قيمت جديد</TD>
<TD align=right>قيمت فعلي </TD>
<TD align=right>نوع سرويس</TD>
<form action="bonus.php" method="post">
<?php
$k=0;
$query1="select * from product";
$result1=mysql_query($query1);
while($row1=mysql_fetch_array($result1))
 {
@$k++;
?>
<TR>
<TD align=center>
<input name=<?php echo $k ?> type="text" value=<?php echo $row1['price']; ?> maxlength=10 onkeypress='validate(event)'>
<input name=<?php echo "$k$k"; ?> type="hidden" value=<?php echo $row1['counter'];?> >
<input name=<?php echo "$k$k$k"; ?> type="hidden" value=<?php echo $row1['price']; ?> >
</TD>
<TD align=center>
<?php echo $row1['price']; ?>
</TD>
<TD align=center>
<?php echo $row1['name']; ?>
</TD>
<?php } ?>
       <input name="count" type="hidden" value=<?php echo $k; ?> >
	   <input name="use" type="hidden" value=<?php echo $u; ?> >
	   <input name="pas" type="hidden" value=<?php echo $p; ?> >
	   <input name="p" type="hidden" value="1" >
</TR>
<TD align=center>
<input type="submit" value="ثبت قيمت ها">
</form>
</TD>
</TABLE>
<?php
@$count=$_REQUEST['count'];
@$p=$_REQUEST['p'];
if ($p==1)
       {


mysql_connect("localhost","root");
mysql_select_db("hotel");
for($x=1;$x<=$count;$x++)
    {
    $n=$_REQUEST[$x];
    $sn="$x$x";
    $n1=$_REQUEST[$sn];

    $m=$_REQUEST[$x];
    $sm="$x$x$x";
    $m1=$_REQUEST[$sm];

    $query2="UPDATE product SET price='$n' WHERE counter='$n1'";
    $result2=mysql_query($query2);
    }
       }
?>

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
 }

 ?>
</html>