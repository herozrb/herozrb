<?php
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>��̨����</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content=Alan name=Author><LINK rev=MADE 
href="mailto:haowubai@hotmail.com"><LINK href="images/private.css" 
type=text/css rel=stylesheet>
<META content="MSHTML 6.00.6000.16890" name=GENERATOR></HEAD>
<BODY>
<TABLE class=navi cellSpacing=1 align=center border=0>
  <TBODY>
  <TR>
    <TH>��̨ >> ϵͳ����</TH></TR></TBODY></TABLE><BR>
	
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">ϵͳ����</th>
	</tr>
     	  <tr>
  <td align="right">��վ����:</td>
  <td><input type="text" name="id" value="" size="20" maxlength="40"/>  </td>
  </tr>
       	  <tr>
  <td align="right">��վ��ַ:</td>
  <td><input type="password" name="pw" value="" size="20" maxlength="40"/>  </td>
  </tr>
  <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" ��¼ "/>

  </td>  </form>
    </tr>
	</table>
	
	</BODY></HTML>
