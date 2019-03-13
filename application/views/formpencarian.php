<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
</form>
<table>
<?php
foreach($results as $row){
?>
    <tr>
        <td><?php echo $row->data1?></td>
        <td><?php echo $row->data2?></td>
        <td><?php echo $row->data3?></td>
        <td><?php echo $row->data4?></td>
        <td><?php echo $row->data5?></td>
        <td><?php echo $row->data6?></td>
    </tr>
<?php   
}
?>
</table>
