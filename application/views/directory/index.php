<div class="pull-right">
	<a href="<?php echo site_url('offices/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>LocationID</th>
		<th>Building</th>
		<th>Deck</th>
		<th>Section</th>
		<th>Office</th>
		<th>Occupant</th>
		<th>Osurl</th>
		<th>Actions</th>
    </tr>
	<?php foreach($directory as $d){ ?>
    <tr>
		<td><?php echo $d['LocationID']; ?></td>
		<td><?php echo $d['building']; ?></td>
		<td><?php echo $d['deck']; ?></td>
		<td><?php echo $d['section']; ?></td>
		<td><?php echo $d['office']; ?></td>
		<td><?php echo $d['occupant']; ?></td>
		<td><?php echo $d['osurl']; ?></td>
		<td>
            <a href="<?php echo site_url('offices/edit/'.$d['LocationID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('offices/remove/'.$d['LocationID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
