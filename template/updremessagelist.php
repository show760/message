<!DOCTYPE html>
<html>
<head>
	<title>Modify ReMessage</title>
</head>
<body bgcolor="#333333">
    <table align='center' width="500" bgcolor="#ffffff" >
        <form action="../controller/douptremessagecontroller.php" method="POST" >
            <tr>
                <td align="center">
                    回覆的留言編號：<?php echo $message['message_Id']; ?>
                </td>
                <td align="center">
                    回覆時間：<?php echo $message['remessage_Time']; ?>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    回覆姓名：<input type='text' name='<?php echo $upd['0']; ?>' 
                    value ='<?php echo $message['remessage_Name']; ?>' >
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    回覆內容：<br />
                     <textarea cols="30" rows="3" name='<?php echo $upd['1']; ?>'>
                     <?php echo $message['remessage_Text']; ?>
                     </textarea>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type='hidden' name='<?php echo $upd['2'];?>' 
                    value ='<?php echo $message['remessage_Id']; ?>'> 
                    <input type='submit' value='送出'>
                </td>
            </tr>
            <tr>    
                <td align="center" colspan="2">
                    <a href="../controller/controller.php">回首頁</a>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>