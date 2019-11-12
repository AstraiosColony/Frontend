<?php echo form_open('offices/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="building" class="col-md-4 control-label"><span class="text-danger">*</span>Building</label>
		<div class="col-md-8">
			<select name="building" class="form-control">
				<option value="">select building</option>
				<?php 
				foreach($all_buildings as $building)
				{
					$selected = ($building['BuildingID'] == $this->input->post('building')) ? ' selected="selected"' : "";

					echo '<option value="'.$building['BuildingID'].'" '.$selected.'>'.$building['BuildingName'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('building');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="deck" class="col-md-4 control-label"><span class="text-danger">*</span>Deck</label>
		<div class="col-md-8">
			<input type="text" name="deck" value="<?php echo $this->input->post('deck'); ?>" class="form-control" id="deck" />
			<span class="text-danger"><?php echo form_error('deck');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="section" class="col-md-4 control-label"><span class="text-danger">*</span>Section</label>
		<div class="col-md-8">
			<input type="text" name="section" value="<?php echo $this->input->post('section'); ?>" class="form-control" id="section" />
			<span class="text-danger"><?php echo form_error('section');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="office" class="col-md-4 control-label">Office</label>
		<div class="col-md-8">
			<input type="text" name="office" value="<?php echo $this->input->post('office'); ?>" class="form-control" id="office" />
		</div>
	</div>
	<div class="form-group">
		<label for="occupant" class="col-md-4 control-label">Occupant</label>
		<div class="col-md-8">
			<input type="text" name="occupant" value="<?php echo $this->input->post('occupant'); ?>" class="form-control" id="occupant" />
		</div>
	</div>
	<div class="form-group">
		<label for="osurl" class="col-md-4 control-label">Osurl</label>
		<div class="col-md-8">
			<input type="text" name="osurl" value="<?php echo $this->input->post('osurl'); ?>" class="form-control" id="osurl" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>