<html>
<head>
<meta charset="utf-8">
<title>Ajouter une astuce.</title>
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
            <td width="472" height="55" valign="top"><font size="5"><a href="index.php"><img src="logo.gif" width="200" height="70" border="0"></a></font></td>
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
          <font color="#DFDFFF">:::<font face="Tahoma"> </font></font><a href="data_out.php"><font face="Tahoma">Lire</font></a> 
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
          require_once("config.inc.php");

          if (isset($_POST["submit"])) {
            $db = mysql_connect($db_host, $db_username, $db_password);
            if (!$db) {
              die("Connexion impossible : " . mysql_error());
            } else {
              if (mysql_select_db($db_name, $db)) {
                $pseudo = sanitizeInput($_POST["pseudo"]);
                $email = sanitizeInput($_POST["email"]);
                $titre = sanitizeInput($_POST["titre"]);
                $astuce = sanitizeInput($_POST["astuce"]);

                $sql = "INSERT INTO $db_usertable VALUES (NULL, NOW(), '$pseudo', '$email', '$titre', '$astuce')";
                $ret = mysql_query($sql, $db);
                print("<b>Merci d'avoir ajouté votre astuce.</b>\n");
              }
            }
          }
          function sanitizeInput($data)
          {
            $data = trim($data);
            $data = strip_tags($data);
            $data = htmlspecialchars($data);
            $data = mysql_real_escape_string($data);
            return $data;
          }
          ?>
          <br>
          <font face="Geneva, Arial, Helvetica, san-serif"><b><font face="Tahoma" color="#8E8EC8">::: 
          Ajouter</font></b></font></b></p>
        <form action="data_in.php" method="post">
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
      <td valign="top" bgcolor="#8E8EC8"> <font size="2" color="#000000"><a href="index.php"><br>
        &middot;Accueil: Aide</a></font> 
        <p><font size="2"><a href="data_out.php">&middot;Lire:<i> </i>Les&nbsp;<br>
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
