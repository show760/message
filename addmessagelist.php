<!DOCTYPE html>
<html>
<head>
	<title>add message</title>
</head>
<body>
    <table align='center' width="500" bgcolor="#E38EFF" >
        <form action="doaddmessagecontroller.php" method="POST" >
        <tr>
            <td align="center">
            姓名：<input type='text' name='<?php echo $add['0']; ?>' >
            </td>
        </tr>
        <tr>
            <td align='center'>
            留言內容：
            </td>
        </tr>
        <tr>
            <td align="center">
            <textarea cols="30" rows="3" name='<?php echo $add['1']; ?>'></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" >
            <input type='submit' value='送出'>
            </td>
        </tr>
        </form>
        <tr>
            <td align="center">
                 <a href="controller.php">回首頁</a>
            </td>
        </tr>
    </table>
</body>
</html>