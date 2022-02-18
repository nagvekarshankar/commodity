<a href="index.php">Back</a>
<h1>List volumes</h1>

<form action="/list_volumes.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="radio" name="granularity" value="hourly" <?php echo (isset($granularity) && ($granularity == 'hourly'))?"checked=checked":''?> >Hourly<br>
<input type="radio" name="granularity" value="daily" <?php echo (isset($granularity) && ($granularity == 'daily'))?"checked=checked":''?>>Daily<br>
<input type="radio" name="granularity" value="montly" <?php echo (isset($granularity) && ($granularity == 'montly'))?"checked=checked":''?>>Monthly<br>
<button type="submit">Show</button><br>
</form>
<br>
<table cellspacing="5">
        <th align="left">Date</th>
        <th align="right">Volume</th>
<?php
	//echo "<pre>";print_r($rows);
	
	if(!empty($rows)) {
	foreach ($rows as $key => $row) { ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td align="right"><?php echo array_sum($row); ?></td>
    </tr>
<?php }} else { ?>
		<tr>
        <td>No Data</td>
        <td align="right">No Data</td>
    </tr>
<?php } ?>
</table>
