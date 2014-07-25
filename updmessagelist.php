<!DOCTYPE html>
<html>
<head>
	<title>template</title>
</head>
<body>
<?php 
//var_dump($show); 
//echo $show[1][0]['message_Time'];
?>
<table align='center' width="1000" bgcolor="#E38EFF" >
<?php 
for ($i = 0; $i < $show[0]; $i++) {
    if (($i+1)%2==1) {
        $color = '#FFFF77';
    } else {
        $color = '#FF6699';
    }
    ?>
    <tr>
        <td>
            <table align='center' bgcolor="<?php echo $color ?>" >
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
            <table align='center' width="500" bgcolor="#E38EFF" >
                <form action="moduptmessagecontroller.php" method="POST" >
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
             <a href="controller.php">回首頁</a>
        </td>    
    </tr>
</table>  
</body>
</html>