
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
<div class="pull-right">
	<a href="<?php echo site_url('personnel/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Active</th>
		<th>DivID</th>
		<th>RankID</th>
		<th>TitleID</th>
		<th>Species</th>
		<th>Gender</th>
		<th>Position</th>
		<th>Password</th>
		<th>Username</th>
		<th>UUID</th>
		<th>DisplayName</th>
		<th>Email</th>
		<th>Induction Date</th>
		<th>Dh</th>
		<th>JoinDate</th>
		<th>DOB</th>
		<th>Birth Place</th>
		<th>Height Metric</th>
		<th>Weight Metric</th>
		<th>Hair Color</th>
		<th>Ethnic Origin</th>
		<th>Nationality</th>
		<th>Ident Marks</th>
		<th>Role</th>
		<th>CCode</th>
		<th>Pfp</th>
		<th>Last Login</th>
		<th>Actions</th>
    </tr>
	<?php foreach($accounts as $a){ ?>
    <tr>
		<td><?php echo $a['ID']; ?></td>
		<td><?php echo $a['active']; ?></td>
		<td><?php echo $a['DivID']; ?></td>
		<td><?php echo $a['RankID']; ?></td>
		<td><?php echo $a['TitleID']; ?></td>
		<td><?php echo $a['species']; ?></td>
		<td><?php echo $a['gender']; ?></td>
		<td><?php echo $a['Position']; ?></td>
		<td><?php echo $a['password']; ?></td>
		<td><?php echo $a['username']; ?></td>
		<td><?php echo $a['UUID']; ?></td>
		<td><?php echo $a['DisplayName']; ?></td>
		<td><?php echo $a['email']; ?></td>
		<td><?php echo $a['induction_date']; ?></td>
		<td><?php echo $a['dh']; ?></td>
		<td><?php echo $a['JoinDate']; ?></td>
		<td><?php echo $a['DOB']; ?></td>
		<td><?php echo $a['birth_place']; ?></td>
		<td><?php echo $a['height_metric']; ?></td>
		<td><?php echo $a['weight_metric']; ?></td>
		<td><?php echo $a['hair_color']; ?></td>
		<td><?php echo $a['ethnic_origin']; ?></td>
		<td><?php echo $a['nationality']; ?></td>
		<td><?php echo $a['ident_marks']; ?></td>
		<td><?php echo $a['role']; ?></td>
		<td><?php echo $a['cCode']; ?></td>
		<td><?php echo $a['pfp']; ?></td>
		<td><?php echo $a['last_login']; ?></td>
		<td>
            <a href="<?php echo site_url('personnel/edit/'.$a['ID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('personnel/remove/'.$a['ID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
