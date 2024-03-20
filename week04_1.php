<html>
<head>
<meta charset = "utf8">
</head>
<form action="ch03_result.php" method="post">
<from action ="" method="post" >
<center> <font size ="30", color = "black"><b>資管晚會報名表</b></font></center>
姓名:<input type="text" name="sName" value="" placeholder="Please input your name" required><br/>
學號:<input type="ID" name="sID" required><br/>
性別:
<input type = "radio" name = "sGender" value = "男生">男生
<input type = "radio" name = "sGender" value = "女生" checked>女生
<br>
年級:
<input type = "radio" name = "sGrade" value = "大一">大一
<input type = "radio" name = "sGrade" value = "大二">大二
<input type = "radio" name = "sGrade" value = "大三">大三
<input type = "radio" name = "sGrade" value = "大四">大四
Email: 
<input type = "text" name = "sEmail" value = "" >
<br>
聯絡方式:
<input type="radio" name="sCon" value="email">Email
<input type="radio" name="sCon" value="line">LINE
<input type="radio" name="sCon" value="fb">FB
<input type="radio" name="sCon" value="手機號碼">手機號碼
<br/>
參加意願:
<input type="radio" name="sJoin" value="參加">參加
<input type="radio" name="sJoin" value="不參加">不參加
</br>
衣服顏色:
<input type="color" name="sColor" value=""><br/>
欲參加日期&時間:
<input type="date" name="sDate" value=""><br/>
<input type="time" name="sTime" value=""><br/>
<input type="file" name="sFile" value=""><br/>
<input type="hidden" name="sSecrit" value="damn bro"><br/>
上一屆資管晚會滿意程度:<input type="range" name="sScore" min="0" max="10"><br/> 
請選擇衣服大小:
<select name=sSize>
    <option value="s">S
    <option value="m" selected>M
    <option value="l">L
    <option value="xl">XL
</select></br>
請輸入你的意見:
<textarea name="sComment" value="" rows="10" cols="50">
</textarea>
<br/>
<br/>
<input type="submit" value="送出">
<input type="submit" value="寫錯了">
</form>


</html>
