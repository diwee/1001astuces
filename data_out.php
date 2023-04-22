<html>
<head>
<meta charset="utf-8">
<title>Lire les astuces</title>
</head>

<body bgcolor="#C1C1FF" text="#000000" vlink="#000000" link="#000000" alink="#000000">
<div align="center">
  <table width="500" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td width="8" height="9"></td>
      <td width="372"></td>
      <td width="6"></td>
      <td width="85"></td>
      <td width="7"></td>
    </tr>
    <tr>
      <td height="58"></td>
      <td colspan="3" valign="top" bgcolor="#DFDFFF"> 
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="471" height="54" valign="top"><font size="5"><a href="index.php"><img src="logo.gif" width="200" height="70" border="0"></a></font></td>
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
          <font face="Small Fonts"><a href="index.php"><font face="Tahoma">Accueil</font></a></font> 
          <font color="#DFDFFF">:::<font face="Tahoma"> </font></font><font face="Tahoma">Lire</font> 
          <font color="#DFDFFF">:::</font> <font face="Small Fonts"><a href="data_in.php"><font face="Tahoma">Ajouter</font></a></font> 
          <font color="#DFDFFF">:::</font></b></font></div>
      </td>
      <td></td>
    </tr>
    <tr> 
      <td height="9"></td>
      <td></td>
      <td></td>
      <td> </td>
      <td></td>
    </tr>
    <tr> 
      <td height="449"></td>
      <td valign="top" bgcolor="#DFDFFF"> 
        <p><br>
          <font face="Geneva, Arial, Helvetica, san-serif"><b><font face="Tahoma" color="#8E8EC8"> 
          ::: Lire</font></b></font>
        <table border="1" cellpadding="0"><br>
          <?php
          require_once("config.inc.php");

          $db = mysql_connect($db_host, $db_username, $db_password);
          if (!$db) {
            die("Connexion impossible : " . mysql_error());
          } else {
            if (mysql_select_db($db_name, $db)) {

              $query = "SELECT * FROM $db_usertable";
              $result = mysql_query($query, $db);

              while ($row = mysql_fetch_array($result)) {
                print("<tr><td bgcolor=\"#8E8EC8\"><b>");
                printf(
                  "<font color=\"white\">%s</font></b></td></tr>\n",
                  stripslashes($row["titre"])
                );
                printf(
                  "<td>Par: <a href=\"mailto:%s\">%s</a>\n",
                  stripslashes($row["email"]),  stripslashes($row["pseudo"])
                );
                printf(
                  "<br>Ajoutée le : %s<hr>\n",
                  stripslashes($row["date"])
                );
                printf(
                  "%s</td></tr>\n",
                  stripslashes($row["astuce"])
                );
              }
            }
          }
          ?>
        </table>
        </font></b> 
        <p>&nbsp;</p>
        <b> </b></td>
      <td></td>
      <td valign="top" bgcolor="#8E8EC8"> 
        <p><br>
          <font size="2" color="#000000"><a href="index.php">&middot;Accueil: 
          Aide</a></font></p>
        <p><font size="2" color="#DFDFFF">&middot;Lire:<i> </i>Les&nbsp;<br>
          astuces des<br>
          internautes.</font></p>
        <p><font size="2"><a href="data_in.php">&middot;Ajouter: une <br>
          astuce. <br>
          </a></font><a href="data_in.php"><font size="3"></font></a></p>
      <p>&nbsp; </p>
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
