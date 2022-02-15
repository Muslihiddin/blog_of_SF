


<?php if (!$this->ion_auth->logged_in()) : ?>
	<?php redirect('/login', 'refresh'); ?>
<?php else : ?>

<div class="add_page">
		<h2><?php echo $title ?></h2>


		<?php //echo validation_errors(); ?>
		<?= form_open_multipart('favourites/create') ?>

				<div class="form-group">
					<label >Hero name</label>
					<input type="text" class="form-control" id="hero_name" name="name" placeholder="Name">
					<span style="color: red;"><?php echo form_error('name'); ?></span>
				</div>
				<div class="form-group">
					<label>Replica</label>
					<input type="text" class="form-control" id="replica" name="replica" placeholder="Replica">
					<span style="color: red;"><?php echo form_error('replica'); ?></span>
				</div>
				<div class="form-group">
					<label>Description</label>
					<input type="text" class="form-control" id="description" name="description" placeholder="Description">
					<span style="color: red;"><?php echo form_error('description'); ?></span>
				</div>
				<div class="form-group">
					<input type="file" class="form-control-file" name="user_file" id="image">
					<span style="color: red;"><?php echo form_error('user_file'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary">Add Hero</button>
		</form>
</div>

<?php endif; ?>
