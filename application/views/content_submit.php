<div id="submit">
		<?php echo heading("Submit Page",1);?>
		<?php 
		/*$this->load->helper("form");
		echo validation_errors();
		echo form_open("site/submit_form");
		
		echo form_label("First Name",'firstname');
		$data=array(
			'name' => 'firstname',
            'id' => 'firstname',
			'value' => '');
		echo form_input($data);
		
		echo form_label("Last Name","lastname");
		$data=array(
			'name' => 'lastname',
            'id' => 'lastname',
			'value' => '');
		echo form_input($data);
		
		echo form_label("Email","email");
		$data=array(
			'name' => 'email',
            'id' => 'email',
			'value' => '');
		echo form_input($data);
		
		
		echo form_submit("formSubmit","Submit");
		
		echo form_close();*/
		?>
		<?php echo form_open_multipart('site/submit_form');?>
		<?php echo form_open_multipart('site/do_upload');?>

		<div>
			<label for="firstname">First Name:</label>
			<input type="text" value="<?php echo set_value("firstname")?>" name="firstname" />
		</div>
		<div>
			<label for="lastname">Last Name:</label>
			<input type="text" value="<?php echo set_value("lastname")?>" name="lastname" />
		</div>
		<div>
			<label for="email">Email:</label>
			<input type="email" value="<?php echo set_value("email")?>" name="email" />
		</div>
		<div>
			<input type="file" name="userfile[]" multiple />
		</div>
		<div>
	 	<!--<input type="file" name="userfile" size="20" />
		</div>
		<div>
	 	<!--<input type="file" name="userfile" size="20" />-->
	 	 <input type="submit" name="submit" value="Submit Form"/>
		</div>
		<?php echo $recaptcha_html; ?>
		</form>
		<?php echo validation_errors();?>
	</div>