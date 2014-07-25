<!DOCTYPE html>
<html>
<head>
	<title>template</title>
</head>
<body>
    <table align='center' width="500" bgcolor="#E38EFF" >
        <form action="../controller/douptmessagecontroller.php" method="POST" >
            <tr>
                <td align="center">
                    留言編號：<?php echo $message['message_Id']; ?>
                </td>
                <td align="center">
                    留言時間：<?php echo $message['message_Time']; ?>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    姓名：<input type='text' name='<?php echo $upd['0']; ?>' value ='<?php echo $message['message_Name']; ?>' >
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    內容：<br />
                     <textarea cols="30" rows="3" name='<?php echo $upd['1']; ?>'><?php echo $message['message_Text']; ?>
                     </textarea>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type='hidden' name='<?php echo $upd['2'];?>' value ='<?php echo $message['message_Id']; ?>'> 
                    <input type='submit' value='送出'>
                </td>
                <td align="center" colspan="2">
                    <a href="../controller/controller.php">回首頁</a>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>