<!DOCTYPE html>
<html>
<head>
	<title>add remessage</title>
</head>
<body>
    <table align='center' width="500" bgcolor="#E38EFF" >
        <form action="../controller/addremessagecontroller.php" method="POST" >
        <tr>
            <td align="center">
            回覆姓名：<input type='text' name='<?php echo $addre['0']; ?>' >
            </td>
        </tr>
        <tr>
            <td align='center'>
            回覆內容：
            </td>
        </tr>
        <tr>
            <td align="center">
            <textarea cols="30" rows="3" name='<?php echo $addre['1']; ?>'></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" >
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type='submit' value='送出'>
            </td>
        </tr>
        </form>
        <tr>
            <td align="center">
                 <a href="../controller/controller.php">回首頁</a>
            </td>
        </tr>
    </table>
</body>
</html>