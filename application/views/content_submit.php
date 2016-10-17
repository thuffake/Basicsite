<div id="submit">
		<?php echo heading("Submit Page",1);?>
		<?php echo form_open_multipart('site/submit_form');?>
		<?php echo form_open_multipart('site/do_upload');?>
		<?php echo validation_errors();?>

		<div>
			<label for="firstname">First Name:</label>
			<input type="text" value="<?php echo set_value("firstname")?>" name="firstname" />
		</div>
		<div>
			<label for="lastname">Last Name:</label>
			<input type="text" value="<?php echo set_value("lastname")?>" name="lastname" />
		</div>
		<div>
			<label for="address1">Primary Address:</label>
			<input type="text" value="<?php echo set_value("address1")?>" name="address1" />
		</div>
		<div>
			<label for="address2">Appartment, suite, building, ect:</label>
			<input type="text" value="<?php echo set_value("address2")?>" name="address2" />
		</div>
		<div>
			<label for="city">City:</label>
			<input type="text" value="<?php echo set_value("city")?>" name="city" />
		</div>
		<div>
			<label for="state">State:</label>
			<select name="state">
				<option value="selected">Select</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>			
		</div>
		<div>
			<label for="zip">Zip Code:</label>
			<input type="zip" value="<?php echo set_value("zip")?>" name="zip" />
		</div>
		<div>
			<label for="phone">Phone:</label>
			<input type="phone" value="<?php echo set_value("phone")?>" name="phone" />
		</div>
		<div>
			<label for="email">Email:</label>
			<input type="email" value="<?php echo set_value("email")?>" name="email" />
		</div>
		<div>
			<label for="companyname">Company Name:</label>
			<input type="companyname" value="<?php echo set_value("companyname")?>" name="companyname" />
		</div>
		<div>
			<label for="companyaddress">Company Address:</label>
			<input type="companyaddress" value="<?php echo set_value("companyaddress")?>" name="companyaddress" />
		</div>
		<div>
			<label for="companycity">Company City:</label>
			<input type="companycity" value="<?php echo set_value("companycity")?>" name="companycity" />
		</div>
		
		<div>
			<label for="companystate">Company State:</label>
			<select name="companystate">
				<option value="selected">Select</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>			
		</div>
		<div>
			<label for="companyzip">Company Zip Code:</label>
			<input type="companyzip" value="<?php echo set_value("companyzip")?>" name="companyzip" />
		</div>
		<div>
			<label for="companyphone">Company Phone:</label>
			<input type="companyphone" value="<?php echo set_value("companyphone")?>" name="companyphone" />
		</div>
		<br>
		<div>
			<input type="file" name="userfile[]" multiple />
		</div>
		<br>
		<div>
			<?php echo $recaptcha_html; ?>
		</div>
		<br>
		<div>
	 	 <input type="submit" name="submit" value="Submit Form"/>
		</div>
		</form>
	</div>