<html>
<head>
<title>
Home
</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../YT-AC0103/html/css.css" rel="stylesheet" type="text/css" />

</head>


<body>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="layout">
  <tr>
    <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#E9EDD4"><pre class="menu"><a href="../YT-AC0103/html/index.html">Home</a>       |       <a href="../YT-AC0103/html/content.html">About us</a>       |       <a href="index.html">OPTIONS TRADING</a>       |       <a href="../YT-AC0103/html/contact.html">Contact us</a></pre></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="780" border="0" cellpadding="0" cellspacing="0" bgcolor="#F6FFDB">
          <tr>
            <td height="133" colspan="2" align="left" valign="top"><table width="594" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="265" height="133" align="left" valign="top"><a href="index.html"><img src="../YT-AC0103/html/images/finance.jpg" alt="" width="265" height="133" border="0" /></a></td>
                <!--td width="329" align="left" valign="top"><img src="images/index_03.gif" alt="" width="329" height="133" /></td-->
              </tr>
            </table></td>
            <!--td width="186" rowspan="2" align="left" valign="top"><img src="images/index_04.gif" alt="" width="186" height="247" /></td-->
          </tr>
          <tr>
            <td width="171" rowspan="2" align="left" valign="top"><table width="171" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top" bgcolor="#749719" class="menu1" style="border-right:#FFFFFF solid 3px;">
				<a href="../YT-AC0103/html/index.html">HOME</a><br />
				<!--a href="index.html">STOCK TRACKER</a><br />
				<!--a href="index.html">STOCK TRACKER</a><br />
				<a href="content.html">PRODUCT &amp; SERVICE</a><br />
				<a href="content.html">INFORMATION</a><br />
				<a href="content.html">PERSONAL BANKING</a><br />
				<a href="content.html">INVESTMENT</a><br />
				<a href="content.html">GOVERNMENT</a><br />
				<a href="content.html">BUSINESS</a><br /-->
							  <?php session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name']))
	header("Location:index.html");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.html");
}	
//echo "<div align='center'>You Are inside secured Page</a>";

echo "Welcome : ".$_SESSION['u_name']." ! ";
echo "<center>";
echo "<a href='../stockticker/ajax-stock.php'><b>TRACK TRADING INFORMATION<b></a>";
echo "<br><a href=secure.php?logout>Logout</a>";
echo "</center>";
?>
				<a href="../YT-AC0103/html/contact.html">CONTACT US</a>				</td>
              </tr>
            
			  <tr>
                <td height="16" align="left" valign="top"><img src="../YT-AC0103/html/images/index_23.gif" alt="" width="171" height="16" /></td>
              </tr>
            </table></td>
            <!--td width="423" height="114" align="left" valign="top" class="header" style="background-image:url(images/index_26.gif); background-repeat:no-repeat;"><div style="padding-top:50px; padding-left:12px; padding-right:102px;">
			<span class="heading1">FINANCE</span> <br />
			<a href="content.html">read more</a></div--></td>
            </tr>
          <tr>
            <td height="143" colspan="2" align="left" valign="top"><table width="609" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="309" align="left" valign="top" style="padding-left:10px; padding-top:8px; padding-right:10px; padding-bottom:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="28" colspan="2" align="left" valign="top"><img src="../YT-AC0103/html/images/index_11.gif" alt="" width="135" height="24" /></td>
                    </tr>
                  <tr>
                    <td width="37%" align="left" valign="top"><img src="../YT-AC0103/html/images/index_18.gif" alt="" width="93" height="90" /></td>
                    <td width="63%" align="left" valign="top" class="header1">
					<span class="heading2">Finance and Development</span><br />
					<br />
					Finance and Development of an organization are directly related.<br />
					<!--a href="content.html">read more</a-->					</td>
                  </tr>
                </table></td>
                <td width="13" align="left" valign="top"><img src="../YT-AC0103/html/images/index_08.gif" alt="" width="13" height="143" /></td>
                <td width="287" align="left" valign="top" style="padding-left:4px; padding-top:8px; padding-right:10px; padding-bottom:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="28" colspan="2" align="left" valign="top"><img src="../YT-AC0103/html/images/index_14.gif" alt="" width="176" height="18" /></td>
                  </tr>
                  <tr>
                    <td width="60%" align="left" valign="top" class="header1">
					<span class="heading2">Trade</span><br />
					<br />
                    Stock Exchange and Trade are the assets that play a crucial role in the economics of a country.<br />
                    <br />
                    <!--a href="content.html">read more</a-->
					</td>
                    <td width="40%" align="right" valign="top"><img src="../YT-AC0103/html/images/index_21.gif" alt="" width="95" height="90" /></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="574" align="center" valign="top" style="padding-top:27px;"><table width="92%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <!--tr>
                  <td colspan="2" align="left" valign="top"><img src="images/index_35.gif" alt="" width="246" height="25" /></td>
                </tr>
                <tr>
                  <td width="75%" align="left" valign="top" class="text1" style="padding-top:5px;"><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</strong><br />
                      <br />
                    Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque.<br />
                    <br />
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis.<br />
                    <br />
                    <a href="content.html">read more</a> </td>
                  <td width="25%" align="right" valign="top" style="padding-top:15px;"><img src="images/index_40.gif" alt="" width="116" height="94" /></td>
                </tr-->
            </table></td>
          </tr>
		</table>
</body>
</html>