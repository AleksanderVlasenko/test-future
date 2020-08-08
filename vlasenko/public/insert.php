<?php

$dbOptions = (require '../settings.php')['db'];

$is_ok = true;

/* test print-1 *  
echo 'host=' . $dbOptions['host'] . '; dbname=' . $dbOptions['dbname'] . '; user=' . $dbOptions['user'] .
'; password=' . $dbOptions['password'];
exit;
 * test print-1 */
 
//(b) get and check input text 
if (isset($_POST['Text1'])) {
$a1=htmlspecialchars($_POST['Text1'], true);
//echo 'name=[' . $a1 . ']<br/><br/>';
                            }
							
if (isset($_POST['TextArea1'])) {
$a2=htmlspecialchars($_POST['TextArea1'], true);
//echo 'text=['.$a2.']<br/>';
                                }

if (strlen($a1) <= 1) {
$is_ok = false;
echo 'ОШИБКА: поле ``Имя`` не было задано.<br/><br/>';	
                      }	

if (strlen($a1) > 250) {
$is_ok = false;
echo 'ОШИБКА: поле ``Имя`` слишком длинное (оно не должно превышать 250 символов).<br/><br/>';	
                       }	

if (strlen($a2) <= 1) {
$is_ok = false;
echo 'ОШИБКА: поле ``Комментарий`` не было задано.<br/><br/>';	
                      }	
								
//exit; ///999999
//(e) get and check input text 

      if ($is_ok)            {
//(b) ;;;;;;;;;;;;;;;;;;;;;;;;
$servername = $dbOptions['host'];
$database = $dbOptions['dbname'];
$username = $dbOptions['user'];
$password = $dbOptions['password'];

$link = mysqli_connect($servername, $username, $password, $database);

if (!$link) {
die("Connection failed: " . mysqli_connect_error());
exit;       }
 
//echo '<br/>Connected successfully<br/><br/>';	

mysqli_set_charset($link, 'utf8');

$par1 = $a1;
$par2 = $a2;

$sql = "INSERT INTO articles (name, text, created_at) VALUES ('$par1', '$par2', NOW())";

if (mysqli_query($link, $sql)) {
echo "<br/>П О З Д Р А В Л Я Е М!<br/><br/>Ваш комментарий был записан успешно.<br/><br/>";
                               }
else echo "Error on write to articles: " . $sql . "<br>" . mysqli_error($link);
	  

mysqli_close($link);
	                         }
//(e) ;;;;;;;;;;;;;;;;;;;;;;;;

?>
<p><a href="index.php">Вернуться на главную страницу</a></p>
