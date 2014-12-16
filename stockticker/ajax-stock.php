<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>

<style type="text/css">					
thead {color:#2929A3}
</style>
		<title>Stock Tracker</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../YT-AC0103/html/css.css" rel="stylesheet" type="text/css" />

		
		<script type="text/javascript" src="jquery-1.3.min.js"></script>
		
		<script>
		
		var stockURL = "stock-ticker.php?tickers=";
		
		var stockTickers = new Array();
		
		$(document).ready(function(){
				
			$("#addStockBtn").click(function(e){
			
				var stock = $("#stock").val();
				
				$.get(stockURL + stock, function(data){
					
					var linesOfData = data.split('\n');

					$("#stocks").empty();					
					$("#stocks").append("<thead><td align=center>Name</td><td align=center>Last Trade</td><td align=center>Change</td></thead>");
	
var p = new Array();
p[0]=21;p[1]=20; p[2]=36;p[3]=15;p[4]=26;p[5]=30;p[6]=21;p[7]=17;p[8]=35;p[9]=28;p[10]=32;p[11]=34;p[12]=11;p[13]=34;
//p[0]=p[1]=p[2]=p[3]=p[4]=p[5]=p[6]=p[7]=p[8]=p[9]=0;
var v = new Array();
				
				

				var last_trade;
				var change;
					for(i=0; i < linesOfData.length-1; i++)
					{
					var lineOfData = linesOfData[i].split(',');
					last_trade = lineOfData[1];
					change = lineOfData[2];

	
	$("#stocks").append("<tr><td align=center>" + String(lineOfData[0]).replace(/\"/g,'' ) + "</td><td align=center>" + String(lineOfData[1]).replace(/\"/g,'' ) + "</td><td align=center>" + String(lineOfData[2]).replace(/\"/g,'' )  );





	/*
v[i]=((lineOfData[1]-p[i])/lineOfData[1])*100;
//v[i]=((100-p[i])/100)*100;

v[i]=Math.round(v[i]*100)/100;


if(v[i]<0)
{
//$('.bg-red').css({"background-color":"red"});

//$("#stocks").append("<tr><td align=center>" + String(lineOfData[0]).replace(/\"/g, '') + "</td><td align=center>" + lineOfData[1] + "</td><td align=center>" + p[i] + "</td><td align=center>" +  lineOfData[2] + "</td><td align=center>" + String(lineOfData[3]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[4]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[5]).replace(/\"/g, '') + "</td><td align=center style=color:red>" + v[i] + "%</td></tr>");
$("#stocks").append("<tr><td align=center>" + String(lineOfData[0]).replace(/\"/g, '') + "</td><td align=center>" + lineOfData[1] );

}

else 
{
						$("#stocks").append("<tr><td align=center>" + String(lineOfData[0]).replace(/\"/g, '') + "</td><td align=center>" + lineOfData[1] + "</td><td align=center>" + p[i] + "</td><td align=center>" +  lineOfData[2] + "</td><td align=center>" + String(lineOfData[3]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[4]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[5]).replace(/\"/g, '') + "</td><td align=center style=color:green>" + v[i] + "%</td></tr>");
}
/*


//$("#stocks").append("<tr><td align=center>" + String(lineOfData[0]).replace(/\"/g, '') + "</td><td align=center>" + lineOfData[1] + "</td><td align=center>" + p[i] + "</td><td align=center>" +  lineOfData[2] + "</td><td align=center>" + String(lineOfData[3]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[4]).replace(/\"/g, '') + "</td><td align=center>" + String(lineOfData[5]).replace(/\"/g, '') + "</td><td align=center>" + v[i] + "%</td></tr>");

*/
	
				}	

			
			});
		
		});
		
		</script>
		
		<style type="text/css">
		
		#stocks {
			width: 600px;
		}
		#stocks thead {
			font-weight: bold;
		}
		
		#add-stock {
			margin-bottom: 10px;
			background-color: #eeeeee;
			padding: 10px;
padding-top: 10px;
		}
		
		</style>
		
	</head>
	<body>
	<body>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="layout">
  <tr>
    <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#E9EDD4"><pre class="menu"><a href="../YT-AC0103/html/index.html">Home</a>       |      <a href="index.html">OPTIONS TRADING</a>       |       <a href="../YT-AC0103/html/contact.html">Contact us</a>       |      <a href='../login/secure.php?logout'>Logout</a></pre></td> 
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
         

	<!--center>
<font size="6" color="red">Stock Tracker</font>
<p align="right">
<a href='../login/secure.php'><b>Back<b></a> | 
<a href='../login/secure.php?logout'><b>Logout<b></a><br>
	</p></center-->

	<form id="add-stock" action="">
		<!--input type="text" id="stock" name="stock" value="enp,clmt,mvo,whx,ston,pse,vlccf,nmm,cpno,vnr,phx,nrp,ree,sdrl" /-->
		<input type="text" id="stock" name="stock" value="^NSEI" />
		<input type="button" value="Get Data" id="addStockBtn" />
<br>
<table id="stocks">
<small>
		<tr>
			<td colspan="2"><small>Enter a Symbol above</small></td>
		</tr>
<tr>
<td colspan="4"><small>( Separate multiple Symbols with "," )</small></td>
</tr>
	</small>
</table>
		
	</form>
	
	</body>
</html>
