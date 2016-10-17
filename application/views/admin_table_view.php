<div id="content">
	<?php echo form_open_multipart('site/approve_request');?>
<div>
	<label for="id">ID of request to approve:</label>
	<input type="text" value="" name="id" />
	<input type="submit" name="submit" value="Approve Request"/>
</div>
</form>
<br>
<?php echo form_open_multipart('site/deny_request');?>
<div>
	<label for="id">ID of request to deny:</label>
	<input type="text" value="" name="id" />
	<input type="submit" name="submit" value="Deny Request"/>
</div>
</form>

<br>
<table>
<?php foreach($query as $row): ?>
<tr> 
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>PDF Link</th>

</tr>
<?php $path=$row->firstname . $row->lastname;?>
<?php $directory =base_url() . 'uploads/' . $path;?>
	<tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->firstname; ?></td>
    <td><?php echo $row->lastname ?></td>
    <td><?php echo $row->email; ?></td>
    <td><a href=<?php echo $directory;?>>Visit W3Schools</a>
</td>
    </tr> 
    
  
    
    <?php endforeach; ?>

</table>

</div>
