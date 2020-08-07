<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TESTik</title>
<style type="text/css">
.style1 {
				background-color: #DADADA;
}
.style2 {
				background-color: #FFFFFF;
}
.style3 {
				font-family: Arial;
}
.style4 {
				font-family: Arial;
				font-size: 48px;				 
}
.style5 {
				font-family: Arial;
				font-size: large;
}
.style6 {
				font-size: small;
}
.style7 {
				font-family: Arial;
				font-size: x-large;
}
.style8 {
				font-size: large;
}
.style9 {
				color: #FFFF00;
				background-color: #FF0000;
}
</style>
</head>

<body style="margin-left: 0">

<?php
function moddate(string $dat) : string
{
$ret = $dat;	
$ystr = substr($dat,0,4);
$mstr = substr($dat,5,2);
$dstr = substr($dat,8,2);
$tstr = substr($dat,11);
//echo 'DATE='.$ystr.'; '.$mstr.'; '.$dstr.'; '.$tstr.'<br/>'; 
$ret = $tstr.' '.$dstr.'-'.$mstr.'-'.$ystr;
return $ret;
}	
?>

<table style="width: 100%" cellspacing="0" cellpadding="0">
				<tr>
								<td style="width: 78px">
								</td>
								<td>
								<p style="margin-top: 0; margin-bottom: 0"><span lang="ru"><span class="style3">
								<strong>
								<span class="style6">Телефон: (499) 340-94-71<img border="0" src="header_logo.jpg" width="150" height="135" align="right"></span></strong><span class="style6"><strong><br />
								</strong>
								</span>
								</span></span><span class="style3">
								<strong>
								<span class="style6">Email: </span> </strong>
								<a href="mailto:info@future-group.ru">
								<strong>
								<span class="style6">info@future-group.ru</span></strong></a></span></p>
								<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
								<p style="margin-top: 0; margin-bottom: 0">
								<span class="style3"><br />
								<br />
								</span><span lang="ru" class="style4">
								Комментарии<br />
								</span><span class="style3"><br />
								</span>
								</td>
				</tr>
				<tr>
								<td style="width: 78px"></td>

				</tr>
				<tr>
								<td class="style1" style="width: 78px">&nbsp;</td>
								<td class="style1"><br />
<!-- (b) processing section -->
<?php $reversed = array_reverse($articles); ?>
<?php foreach ($reversed as $article): ?>
<p>
<div>
    <strong>
    <span lang="ru" class="style7"><?= $article['name'] ?></span>
	</strong>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?= moddate($article['created_at']) ?>
</div>	
</p>	
    <p><?= $article['text'] ?></p>
	<p></br></p>
<?php endforeach; 
unset($article); 
?>
    <hr>
<!-- (e) processing section -->
 
<!-- (b) fill article -->
								<p><span lang="ru" class="style5">Оставить комментарий</span></p>
								<p><span lang="ru">Ваше имя</span></p>
<form method="post"  action="insert.php" class="style8">
<input name="Text1" type="text" style="width: 550px; height: 39px;" class="style5" />
								
<p>Ваш комментарий</p>
								<p>
												<p style="margin-bottom: 10px">
												<textarea name="TextArea1" style="width: 550px; height: 110px"></textarea></p>
<p style="margin-top: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
<input name="B0" type="submit" value="Отправить" style="height: 35px; width: 125px" /></p>
</form>
								</p>
								</p>
								<p>&nbsp;</p>	
<!-- (e) fill article -->								
							
								</td>
				</tr>
				<tr>
								<td class="style2" style="width: 78px">&nbsp;</td>
								<td class="style2">
								<img border="0" src="footer_logo.jpg" width="503" height="144"><br />
								</td>
				</tr>
</table>
<p>&nbsp;</p>

</body>

</html>
