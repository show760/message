<!DOCTYPE html>
<html>
<head>
	<title>template</title>
</head>
<body bgcolor="#333333">
<?php 
//var_dump($show); 
//echo $show[1][0]['message_Time'];
?>
<table align='center' width="1000" bgcolor="#ffffff" >
<?php 
for ($i = 0; $i < $show[0]; $i++) {
    ?>
    <tr>
        <td>
            <table align='center' bgcolor="#ffffff" >
                <tr>
                    <td align='left' width="333" >
                        留言編號：<?php echo $show[1][$i]['message_Id']; ?>	
                    </td>
                    <td align='left' width="333">
                        姓名：<?php echo $show[1][$i]['message_Name']; ?>
                    </td>
                    <td align='left' width="333">
                        內容：<?php echo $show[1][$i]['message_Text']; ?>
                    </td>
                </tr>
                <tr>
                <tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <br />
        </td>
    </tr>
    <?php 
}

?>
    <tr>
        <td align="center">
            <table align='center' width="500" bgcolor="#ffffff" >
                <form action="../controller/moduptmessagecontroller.php" method="POST" >
                <tr>
                    <td align="center">
                        輸入欲修改之留言編號：<input type='text' name='<?php echo $upd; ?>' >
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type='submit' value='送出'>
                    </td>
                </tr>
                </form>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
             <a href="../controller/controller.php">回首頁</a>
        </td>    
    </tr>
</table>  
</body>
</html>