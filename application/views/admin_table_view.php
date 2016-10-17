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
</div>
<div>
</form>

<br>

<table>
<?php foreach($query as $row): ?>
<tr> 
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Address2</th>
<th>City</th>
<th>State</th>
<th>Zip</th><br />
<th>Phone</th>
<th>Email</th>
<th>Company Name</th>
<th>Company Address</th>
<th>Company City</th>
<th>Company State</th>
<th>Company Zip</th>
<th>Company Phone</th>
<th>PDF Link</th>


</tr>
<?php $path=$row->firstname . $row->lastname;?>
<?php $directory =base_url() . 'uploads/' . $path;?>
	<tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->firstname; ?></td>
    <td><?php echo $row->lastname ?></td>
    <td><?php echo $row->address1; ?></td>
    <td><?php echo $row->address2; ?></td>
    <td><?php echo $row->city; ?></td>
    <td><?php echo $row->state; ?></td>
    <td><?php echo $row->zip; ?></td>
    <td><?php echo $row->phone; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><?php echo $row->companyname; ?></td>
    <td><?php echo $row->companyaddress; ?></td>
    <td><?php echo $row->companycity; ?></td>
    <td><?php echo $row->companystate; ?></td>
    <td><?php echo $row->companyzip; ?></td>
    <td><?php echo $row->companyphone; ?></td>
    <td><a href=<?php echo $directory;?>?>Index to Invoices</a></td>
    </tr> 
    
  
    
    <?php endforeach; ?>

</table>



</div>
