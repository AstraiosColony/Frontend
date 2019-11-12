
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>


<?php echo form_open('account/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="active" class="col-md-4 control-label"><span class="text-danger">*</span>Active</label>
		<div class="col-md-8">
			<input type="checkbox" name="active" value="1" id="active" />
			<span class="text-danger"><?php echo form_error('active');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="DivID" class="col-md-4 control-label">Division</label>
		<div class="col-md-8">
			<select name="DivID" class="form-control">
				<option value="">select division</option>
				<?php 
				foreach($all_divisions as $division)
				{
					$selected = ($division['did'] == $this->input->post('DivID')) ? ' selected="selected"' : "";

					echo '<option value="'.$division['did'].'" '.$selected.'>'.$division['dname'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="RankID" class="col-md-4 control-label">Rank</label>
		<div class="col-md-8">
			<select name="RankID" class="form-control">
				<option value="">select rank</option>
				<?php 
				foreach($all_rank as $rank)
				{
					$selected = ($rank['RankID'] == $this->input->post('RankID')) ? ' selected="selected"' : "";

					echo '<option value="'.$rank['RankID'].'" '.$selected.'>'.$rank['rname'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TitleID" class="col-md-4 control-label">Title</label>
		<div class="col-md-8">
			<select name="TitleID" class="form-control">
				<option value="">select title</option>
				<?php 
				foreach($all_titles as $title)
				{
					$selected = ($title['tid'] == $this->input->post('TitleID')) ? ' selected="selected"' : "";

					echo '<option value="'.$title['tid'].'" '.$selected.'>'.$title['tag_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="species" class="col-md-4 control-label">Species</label>
		<div class="col-md-8">
			<select name="species" class="form-control">
				<option value="">select species</option>
				<?php 
				foreach($all_species as $species)
				{
					$selected = ($species['species_id'] == $this->input->post('species')) ? ' selected="selected"' : "";

					echo '<option value="'.$species['species_id'].'" '.$selected.'>'.$species['species_name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="gender" class="col-md-4 control-label">Gender</label>
		<div class="col-md-8">
			<select name="gender" class="form-control">
				<option value="">select</option>
				<?php 
				$gender_values = array(
					'0'=>'Male',
					'1'=>'Female',
					'2'=>'Other',
				);

				foreach($gender_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('gender')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Position" class="col-md-4 control-label">Ship</label>
		<div class="col-md-8">
			<select name="Position" class="form-control">
				<option value="">select ship</option>
				<?php 
				foreach($all_ships as $ship)
				{
					$selected = ($ship['registry_id'] == $this->input->post('Position')) ? ' selected="selected"' : "";

					echo '<option value="'.$ship['registry_id'].'" '.$selected.'>'.$ship['name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="UUID" class="col-md-4 control-label">UUID</label>
		<div class="col-md-8">
			<input type="text" name="UUID" value="<?php echo $this->input->post('UUID'); ?>" class="form-control" id="UUID" />
			<span class="text-danger"><?php echo form_error('UUID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="DisplayName" class="col-md-4 control-label">DisplayName</label>
		<div class="col-md-8">
			<input type="text" name="DisplayName" value="<?php echo $this->input->post('DisplayName'); ?>" class="form-control" id="DisplayName" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="induction_date" class="col-md-4 control-label">Induction Date</label>
		<div class="col-md-8">
			<input type="text" name="induction_date" value="<?php echo $this->input->post('induction_date'); ?>" class="form-control" id="induction_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="dh" class="col-md-4 control-label">Dh</label>
		<div class="col-md-8">
			<input type="text" name="dh" value="<?php echo $this->input->post('dh'); ?>" class="form-control" id="dh" />
		</div>
	</div>
	<div class="form-group">
		<label for="JoinDate" class="col-md-4 control-label">JoinDate</label>
		<div class="col-md-8">
			<input type="text" name="JoinDate" value="<?php echo $this->input->post('JoinDate'); ?>" class="form-control" id="JoinDate" />
			<span class="text-danger"><?php echo form_error('JoinDate');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="DOB" class="col-md-4 control-label">DOB</label>
		<div class="col-md-8">
			<input type="text" name="DOB" value="<?php echo $this->input->post('DOB'); ?>" class="form-control" id="DOB" />
		</div>
	</div>
	<div class="form-group">
		<label for="birth_place" class="col-md-4 control-label">Birth Place</label>
		<div class="col-md-8">
			<input type="text" name="birth_place" value="<?php echo $this->input->post('birth_place'); ?>" class="form-control" id="birth_place" />
		</div>
	</div>
	<div class="form-group">
		<label for="height_metric" class="col-md-4 control-label">Height Metric</label>
		<div class="col-md-8">
			<input type="text" name="height_metric" value="<?php echo $this->input->post('height_metric'); ?>" class="form-control" id="height_metric" />
		</div>
	</div>
	<div class="form-group">
		<label for="weight_metric" class="col-md-4 control-label">Weight Metric</label>
		<div class="col-md-8">
			<input type="text" name="weight_metric" value="<?php echo $this->input->post('weight_metric'); ?>" class="form-control" id="weight_metric" />
		</div>
	</div>
	<div class="form-group">
		<label for="hair_color" class="col-md-4 control-label">Hair Color</label>
		<div class="col-md-8">
			<input type="text" name="hair_color" value="<?php echo $this->input->post('hair_color'); ?>" class="form-control" id="hair_color" />
		</div>
	</div>
	<div class="form-group">
		<label for="ethnic_origin" class="col-md-4 control-label">Ethnic Origin</label>
		<div class="col-md-8">
			<input type="text" name="ethnic_origin" value="<?php echo $this->input->post('ethnic_origin'); ?>" class="form-control" id="ethnic_origin" />
		</div>
	</div>
	<div class="form-group">
		<label for="nationality" class="col-md-4 control-label">Nationality</label>
		<div class="col-md-8">
			<input type="text" name="nationality" value="<?php echo $this->input->post('nationality'); ?>" class="form-control" id="nationality" />
		</div>
	</div>
	<div class="form-group">
		<label for="ident_marks" class="col-md-4 control-label">Ident Marks</label>
		<div class="col-md-8">
			<input type="text" name="ident_marks" value="<?php echo $this->input->post('ident_marks'); ?>" class="form-control" id="ident_marks" />
		</div>
	</div>
	<div class="form-group">
		<label for="role" class="col-md-4 control-label">Role</label>
		<div class="col-md-8">
			<input type="text" name="role" value="<?php echo $this->input->post('role'); ?>" class="form-control" id="role" />
		</div>
	</div>
	<div class="form-group">
		<label for="cCode" class="col-md-4 control-label">CCode</label>
		<div class="col-md-8">
			<input type="text" name="cCode" value="<?php echo $this->input->post('cCode'); ?>" class="form-control" id="cCode" />
		</div>
	</div>
	<div class="form-group">
		<label for="pfp" class="col-md-4 control-label">Pfp</label>
		<div class="col-md-8">
			<input type="text" name="pfp" value="<?php echo $this->input->post('pfp'); ?>" class="form-control" id="pfp" />
		</div>
	</div>
	<div class="form-group">
		<label for="last_login" class="col-md-4 control-label">Last Login</label>
		<div class="col-md-8">
			<input type="text" name="last_login" value="<?php echo $this->input->post('last_login'); ?>" class="form-control" id="last_login" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>






        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


