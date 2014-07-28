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
for ($i = 0; $i < $show[0][0]; $i++) {
    if (($i+1)%2==1) {
        $color = '#FFFF77';
    } else {
        $color = '#99FF33';
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
                    <td colspan="2" align="left">
                        <?php echo $show[1][$i]['message_Text']; ?>
                    </td>
                    <td align="right">
                    <form action="../controller/remesscontroller.php" method="POST" >
                    <input type="hidden" name="id" value="<?php echo $show[1][$i]['message_Id']; ?>">
                    <input type='submit' value='回覆留言'>
                    </form>
                    </td>
                </tr>
                <tr>
                    
                </tr>
            </table>
            <table width="800" align="center" bgcolor="#F0BBFF">
            <?php
            for ($j = 0; $j < $show[0][1]; $j++) {
                if ($show[2][$j]['message_Id'] == $show[1][$i]['message_Id']) {
            ?>
                    <tr>
                        <td align="left" width="400">
                            回覆姓名：<?php echo $show[2][$j]['remessage_Name']; ?>
                        </td>
                        <td align="right" width="400">
                            [日期：<?php echo $show[2][$j]['remessage_Time']; ?>]
                        </td>
                    </tr>
                    <tr>
                        <td align="left" width="400">
                            <?php echo $show[2][$j]['remessage_Text']; ?>
                        </td>
                        <td align="right" width="400">
                            <form action="../controller/delremesscontroller.php" method="POST" >
                                <input type="hidden" name="id" value="<?php echo $show[2][$j]['remessage_Id']; ?>">
                                <input type='submit' value='刪除留言'>
                            </form>
                            <form action="../controller/modremesslistcontroller.php" method="POST" >
                                <input type="hidden" name="id" value="<?php echo $show[2][$j]['remessage_Id']; ?>">
                                <input type='submit' value='修改留言'>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <hr>    
                        </td>
                    </tr>   
            <?php
                }
            }
            ?>
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