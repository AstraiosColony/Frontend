















          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Offices</h1>
            <a href="<?php echo site_url('offices/add'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Add</a>
          </div>

          <!-- Content Row -->
          <div class="row">

  
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




            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




      </div>
      <!-- End of Main Content -->

