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
                        留言者：<?php echo $show[1][$i]['message_Name']; ?>
                    </td>
                    <td align='right' width="333">
                        [日期：<?php echo $show[1][$i]['message_Time']; ?>]
                    </td>
                <tr>   
                    <td colspan="3" align="left">
                        <?php echo $show[1][$i]['message_Text']; ?>
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
            <a href="../controller/addmessagecontroller.php">新增留言</a>
            <a href="../controller/delmessagecontroller.php">刪除留言</a>
            <a href="../controller/updmessagecontroller.php">修改留言</a>
        </td>
    </tr>
</table>  
</body>
</html>
