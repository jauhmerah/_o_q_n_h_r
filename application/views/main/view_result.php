<table>
<?php
	foreach($results as $row)
	{
		?>
		<tr>
			<td><?php echo $row->ID></td>
			<td><?php echo $row->category></td>
		</tr>
<?php
	}
	?>
	</table>
