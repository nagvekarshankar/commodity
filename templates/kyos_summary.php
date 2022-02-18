<h1>List commodity</h1>

<br>
<table cellspacing="5">
    <tr>
        <th>ID</th>
        <th align="left">Name</th>
        <th align="left">Volume</th>

    <tr>
<?php 
$unique_arr = array_intersect_key($rows,array_unique(array_column($rows, 'commodity')));
$i=0;
if(!empty($unique_arr)){
foreach ($unique_arr as $key => $row) { ?>
    <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $this->kyos_model->commodities[$row['commodity']]; ?></td>
        <td><?php echo $this->kyos_model->list_commodity($hash[$row['commodity']]); ?></td>
    </tr>
<?php } }  else { ?>
	<tr>
        <td rowspan="3">No Data</td>
    </tr>
<?php } ?>

</table>
<br>
<a href="index.php">back</a>
