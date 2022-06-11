<html>
<head>
<title>هتل بزرگ ايرانيان</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="js-persian-cal.css">
	<script type="text/javascript" src="js-persian-cal.min.js"></script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</body>
<script>

  var x
function xx(frm)
{
	x=document.form1.formtext2.value;
	x1=document.form1.formtext3.value;
	x2=document.form1.formtext4.value;
	if(x=="")
    {
    alert("لطفا نام را کامل کنيد");
    return false;
    }
    if(x1=="")
    {
    alert("لطفا شماره تماس خود را وارد کنيد");
    return false;
    }
    if(x2=="")
    {
    alert("لطفا ايميل را کامل کنيد");
    return false;
    }
}

</script>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/index_02.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="38%"><img src="images/index_01.gif" width="380" height="166" alt=""></td>
        <td width="62%"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td width="47%" class="white-text"></td>
            <td width="53%"><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td width="7%"><img src="images/index_05.jpg" width="33" height="32" alt=""></td>
                 <td width="93%" class="white-text">Tel. +98 911 111 1111<br>
                  info@iranianhotel.com</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="231" background="images/index_08.jpg"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="94%"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><h2 class="white-text"><strong></strong></h2></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td width="3%"><img src="images/Arrow.gif" width="20" height="20"></td>
                <td width="97%" class="white-text">بالاترين امکانات</td>
              </tr>
              <tr>
                <td><img src="images/Arrow.gif" width="20" height="20"></td>
                <td class="white-text">فضايي دلنشين و آرام</td>
              </tr>
              <tr>
                <td><img src="images/Arrow.gif" width="20" height="20"></td>
                <td class="white-text">سفري به ياد ماندني</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="about.php"><img src="images/index_09.gif" alt="" width="197" height="41" border="0"></a></td>
        <td><a href="reserv.php"><img src="images/index_11.gif" alt="" width="129" height="41" border="0"></a></td>
        <td><a href="contact.php"><img src="images/index_12.gif" alt="" width="129" height="41" border="0"></a></td>
        <td><a href="admin/index.php"><img src="images/index_10.gif" alt="" width="131" height="41" border="0"></a></td>
     <td><a href="p.php"><img src="images/index_13.gif" alt="" width="131" height="41" border="0"></a></td>
       <td><img src="images/index_13.jpg" width="283" height="41" alt=""></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/index_14.jpg" width="1000" height="44" alt=""></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="29%" align="center" valign="top"><table width="211" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="price.php"><img src="images/index_20.gif" alt="" width="211" height="30" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="caffe.php"><img src="images/index_23.gif" alt="" width="211" height="39" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="res.php"><img src="images/index_26.gif" alt="" width="211" height="39" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="fun.php"><img src="images/index_27.gif" alt="" width="211" height="39" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="shop.php"><img src="images/index_28.gif" alt="" width="211" height="39" border="0"></a></td>
          </tr>
        </table></td>
        <td width="71%" valign="top"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><img src="images/index_17.gif" width="299" height="26" alt=""></td>
          </tr>
          <tr>
            <td bgcolor="#BED780"><img src="images/spacer.gif" width="1" height="1"></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
              <TD align=right>
<?php
@$x=$_REQUEST['formtext1'];
@$x2=$_REQUEST['select1'];
@$x3=$_REQUEST['select2'];
@$x4=$_REQUEST['formtext2'];
@$x5=$_REQUEST['formtext3'];
@$x6=$_REQUEST['formtext4'];
@$x7=$_REQUEST['select3'];
@$x8=$_REQUEST['select4'];

mysql_connect("localhost","root");
mysql_select_db("hotel");

$query2 = "SELECT * FROM product WHERE counter='$x8'";
$result2=mysql_query($query2);
$row2=mysql_fetch_array($result2);
$mo1=$row2['name'];
$mo2=$row2['t'];

if ($mo2>0)
  {
    if(isset($_POST['submit']))
    {
    $query3="update product set t=t-1 WHERE counter='$x8'";
    $result3=mysql_query($query3);
    $query1="insert into rezerv(vorod,out,fm,name,mobile,email,suitmulti,suit,val) values ('$x','$x2','$x3','$x4','$x5','$x6','$x7','$mo1','ثبت')";
    $result1=mysql_query($query1);
echo "<script>alert('$x5 کد ثبت');  </script><meta http-equiv=refresh content=0;url=index.php>";
    }
  }
    if(isset($_POST['submit']))
    {
    if ($mo2==0)
     {
	 echo "<script>alert('اتاف خالي مورد نظر موجود نيست');  </script><meta http-equiv=refresh content=0;url=index.php>";
     }
    }
?>
<? $ra=rand(1, 1000000); ?>
<form name="form1" onsubmit="return xx();" action="contact.php" method="post">
<input name="formtext3" type="hidden" value=<?php echo $ra ?> ><? echo $ra; ?>&nbsp;&nbsp;:کد پيگيري ثبت <br />
<input name="formtext1" type="text" id="pcal1" class="pdate">:تاريخ ورود<br/>

<input name="select1" type="text" id="pcal7" class="pdate">:تاريخ خروج<br>

<select size="1" name="select2">
   <option value="آقاي">آقاي</option>
   <option value="خانم">خانم</option>
</select>:آقا/خانم <br />

<input name="formtext2" type="text">:نام و نام خانوادگي <br />

<input name="formtext4" type="text">:پست الکترونيکي <br />

<select size="1" name="select3">
   <option value="يک">يک</option>
   <option value="دو ">دو</option>
   <option value="سه">سه</option>
</select>:تعداد اتاق <br />

<select size="1" name="select4">
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
$query1="select * from product";
$result1=mysql_query($query1);
while($row1=mysql_fetch_array($result1))
 {
?>
   <option value=<?php echo $row1['counter']; ?>><?php echo $row1['name']; ?></option>

<? } ?>
</select>:نوع اتاق  <br /><br />
<input type="submit" name="submit" value="ارسال فرم">&nbsp;&nbsp;<input type="reset" value="پاک کردن">
</form>
</TD>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><h2></h2></td>
          </tr>
          <tr>
            <td bgcolor="#BED780"><img src="images/spacer.gif" width="1" height="1"></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td width="19%"><img src="images/index_32.jpg" width="117" height="93" alt=""></td>
                <td width="19%"><img src="images/index_34.jpg" width="113" height="93" alt=""></td>
                <td width="22%"><img src="images/index_36.jpg" width="116" height="93" alt=""></td>
                <td width="40%"><img src="images/index_38.jpg" width="113" height="93" alt=""></td>


              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>

              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
	<script type="text/javascript">
		var objCal1 = new AMIB.persianCalendar( 'pcal1' );

var objCal1 = new AMIB.persianCalendar( 'pcal7' );


		var objCal2 = new AMIB.persianCalendar( 'pcal2', {
				initialDate: '1301/1/1',
			}
		);

		var objCal3 = new AMIB.persianCalendar( 'pcal3', {
				defaultDate: '1401/12/12'
			}
		);

		var objCal4 = new AMIB.persianCalendar( 'pcal4', {
				onchange: function( pdate ){
					if( pdate ) {
						alert( pdate.join( '/' ) );
					} else {
						alert( 'تاریخ واردشده نادرست است' );
					}
				}
			}
		);

		var objCal5 = new AMIB.persianCalendar( 'pcal5', {
				extraInputID: 'extra',
				extraInputFormat: 'YYYY/MM/DD - yyyy/mm/dd - JD'
			}
		);
	</script>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="53" background="images/index_48.gif"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="75%" align="center" class="white-text">Copyright &copy; IranianHotel. All rights reserved.</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>