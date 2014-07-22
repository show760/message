<?php
include "dbconn.php";

$link = createConnection();
//找所有留言
$sql = "SELECT * FROM `message`";
$result = executeSql("james", $sql, $link);
$total_records = mysql_num_rows($result);
$re=
<<<HTML
    <table border='1' align='center' width='800'>
        <tr>
            <td align='center' colspan = '2'>
                留言板
            </td>
        </tr>
HTML;

for ($i = 0; $i < $total_records; $i++) {
    $row = mysql_fetch_assoc($result);
    $re.=
<<<HTML
        <tr>
            <td align='center'>
                留言編號：{$row['message_Id']}
            </td>
            <td>
                留言時間：{$row['message_Time']}
            </td>
        </tr>
        <tr>
            <td align='center'>
                姓名：{$row['message_Name']}
            </td>
            <td>
            內容：{$row['message_Text']}
            </td>
        </tr>
HTML;
}
$re.=
<<<HTML
    </table>
<hr>

<table border='1' align='center' >
    <form action="message_send.php" method="POST" >
        <tr>
            <td>
            姓名：<input type='text' name='name' >
            </td>
        </tr>
        <tr>
            <td align='center'>
            留言內容：
            </td>
        </tr>
        <tr>
            <td>
            <textarea cols="30" rows="3" name="text"></textarea>
            </td>
        </tr>
        <tr>
            <td>
            <input type='submit' value='送出'>
            </td>
        </tr>
    </form>
</table>
HTML;

?>

<!DOCTYPE html>
<html>
<head>
	<title>message</title>
</head>
<body BGCOLOR='#FFFFAA'>
<?php 
    echo $re;
?>

</body>
</html>

