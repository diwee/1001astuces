<html>
<head>
<title>Ajouter une astuce.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#C1C1FF" text="#000000" vlink="#000000" link="#000000" alink="#000000">
<div align="center">
  <table width="500" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td width="8" height="9"></td>
      <td width="370"></td>
      <td width="5"></td>
      <td width="88"></td>
      <td width="7"></td>
    </tr>
    <tr>
      <td height="58"></td>
      <td colspan="3" valign="top" bgcolor="#DFDFFF"> 
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="472" height="55" valign="top"><font size="5"><a href="index.php3"><img src="logo.gif" width="200" height="70" border="0"></a></font></td>
          </tr>
        </table>
      </td>
      <td></td>
    </tr>
    <tr>
      <td height="9"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="27"></td>
      <td colspan="3" valign="top" bgcolor="#8E8EC8"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b>&nbsp;<font color="#DFDFFF">:::</font> 
          <font face="Small Fonts"><a href="index.php3"><font face="Tahoma">Accueil</font></a></font> 
          <font color="#DFDFFF">:::<font face="Tahoma"> </font></font><a href="data_out.php3"><font face="Tahoma">Lire</font></a> 
          <font color="#DFDFFF">:::</font> <font face="Tahoma">Ajouter</font> 
          <font color="#DFDFFF">:::</font></b></font></div>
      </td>
      <td></td>
    </tr>
    <tr> 
      <td height="9"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="449"></td>
      <td valign="top" bgcolor="#DFDFFF"> 
        <p><b> 
          <?php
include ("config.inc.php3");
if(isset($submit)):
	$db = mysql_connect($host, $login, $password);
	mysql_select_db($base, $db);
	$date = date("Y-m-d");
	$sql = "INSERT INTO astuces 
	VALUES(NULL,'$date','$pseudo','$email',
	'$titre','$astuce')";
	mysql_query($sql);
	print("<b>Merci d'avoir ajouté votre astuce.</b>\n");
endif;
?>
          <br>
          <font face="Geneva, Arial, Helvetica, san-serif"><b><font face="Tahoma" color="#8E8EC8">::: 
          Ajouter</font></b></font></b></p>
        <form action="data_in.php3" method="post">
          <p>&nbsp;Pseudo: 
            <input type="text" name="pseudo">
            <br>
            &nbsp;Email:&nbsp;&nbsp;&nbsp; 
            <input type="text" name="email">
            <br>
            <br>
            &nbsp;Titre:&nbsp;&nbsp;&nbsp; 
            <input type="text" name="titre" size="34">
          </p>
          <p> &nbsp;Astuce:<br>
            &nbsp; 
            <textarea cols=40 rows=10 name="astuce"></textarea>
          <p> &nbsp; 
            <input type="submit" name="submit" value="Ok">
        </form>
      </td>
      <td></td>
      <td valign="top" bgcolor="#8E8EC8"> <font size="2" color="#000000"><a href="index.php3"><br>
        &middot;Accueil: Aide</a></font> 
        <p><font size="2"><a href="data_out.php3">&middot;Lire:<i> </i>Les&nbsp;<br>
          astuces des<br>
          internautes.</a></font></p>
        <p><font size="2" color="#DFDFFF">&middot;Ajouter: une <br>
          astuce. <br>
          </font></p>
      </td>
      <td></td>
    </tr>
    <tr> 
      <td height="11"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <p>&copy; 1001astuces.fr.st</p>
</div>
</body>
</html>
