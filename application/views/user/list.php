<table class=table border="1">

<?php
foreach($studentlist as $row) {
?>

<tr>
<td><?php echo $row->id; ?> </td>
<td><?php// echo $row['username']; ?> </td>
<td><?php //echo $row['cnic'] ?> </td>
<td><?php //echo $row['image'] ?> </td>
</tr>


<?php
}
?>

</table>


<?php 

var_dump($studentlist);

?>