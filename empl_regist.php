<HTML>
<HEAD>
<TITLE>EMP REGISTRATION </TITLE>
</HEAD>
<BODY bgcolor="silver">
<form name="form3" method="post" action="emp_reg.php"/>
<CENTER>

<font size=7 face="Times New Roman">&nbsp;&nbsp;&nbsp; Add Employee details</font>

<fieldset>
<TABLE >

<br><br><br><br><br>

<tr>

    <TD><B>EMPLOYEE NAME:</B></TD>
    <td><INPUT TYPE="text" NAME="emp_name" size =25 autofocus></td>

</tr>
<tr>
 <TD><B>EMPLOYEE IMAGE:</B></TD>
  <td><input type="file" name="image" id="image" />  </td>
               
</tr>


<tr>

  <TD><B>AGE :</B></TD>
  <TD><INPUT TYPE="text" NAME="age" size=25 autofocus></TD>

</tr>

<tr>
	<td><b>GENDER:</b></td>
	<td><select name="gender">
		<option >M
		<option >F
		<option >OTHERS
		
	</select>
       </td>
</tr>

<tr>

    <TD><B>EMPLOYEE NUMBER :</B></TD>
    <TD><INPUT TYPE="text" NAME="emp_no" size=25 autofocus></TD>

</tr>

<tr>

    <TD><B>ADDRESS :</B></TD>
    <td><textarea rows="3" cols="27" NAME="address" placeholder="enter full address" autofocus></textarea></td>

</tr>

<tr>
    <TD><B>CITY :</B></TD>
    <TD><INPUT TYPE="text" NAME="city" size=25 autofocus></TD>
</tr>

<tr>
   <TD><B>PHONE NUMBER :</b></TD>
   <TD><INPUT TYPE="tel" NAME="phone_no" size=25 placeholder="+91" autofocus></TD>

</tr>


<tr>

   <td><b>DEPARTMENT NUMBER :</b></td>
   <td><INPUT type="text" name=dept_no size=25 autofocus></td>

</tr>

<tr>
 
   <TD><B>DATE OF JOIN : </TD>
   <TD><INPUT TYPE="DATE" NAME="doj" size=25 placeholder="yyyy-mm-dd" autofocus></TD></B>

</tr>

<tr>
	<td><b>DESIGNATION :</b></td>
   	<TD><INPUT TYPE="text" NAME="designation" size=25 autofocus></TD>
</tr>
<tr><td><b><button type="submit">Submit</button></b></td></tr>


</form>

</center>
</body>
</html>