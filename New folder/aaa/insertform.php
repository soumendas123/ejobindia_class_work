<form action="empregis.php" method="post" enctype="multipart/form-data">
		
		<fieldset style="width:300px">
		<legend>New Registration</legend>
			<table width=200 border=0>
				<tr>
					<td>ID</td>
					<td><input type="text" <?php if($status=="edit") { echo "readonly"; } ?> name="txtid" value="<?php echo @$r[1]; ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="txtname" value="<?php echo @$r[2]; ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea rows=5 name="txtaddr"><?php echo @$r[3]; ?></textarea></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
	<input type="radio" value="Male" <?php if(@$r[4]=="Male") { echo "checked"; } ?> name="txtgen">Male
	<input type="radio" value="Female" <?php if(@$r[4]=="Female") { echo "checked"; } ?> name="txtgen">Female
					</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="txtphone" value="<?php echo @$r[5]; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="txtemail" value="<?php echo @$r[6]; ?>"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><input type="text" name="txtdob" value="<?php echo @$r[7]; ?>"></td>
				</tr>
				<tr>
					<td>Blood</td>
					<td>
				<select name="txtblood">
					<option value="A+" <?php if(@$r[8]=="A+") { echo "selected"; } ?>>A+</option>
					<option value="A-" <?php if(@$r[8]=="A-") { echo "selected"; } ?>>A-</option>
					<option value="B+" <?php if(@$r[8]=="B+") { echo "selected"; } ?>>B+</option>
					<option value="B-" <?php if(@$r[8]=="B-") { echo "selected"; } ?>>B-</option>
					<option value="O+" <?php if(@$r[8]=="O+") { echo "selected"; } ?>>O+</option>
					<option value="O-" <?php if(@$r[8]=="O-") { echo "selected"; } ?>>O-</option>
							
				</select>
					</td>
				</tr>
				<tr>
					<td>Qualification</td>
					<td><input type="text" name="txtquali" value="<?php echo @$r[9]; ?>"></td>
				</tr>
				<tr>
					<td>Experience</td>
					<td><input type="text" name="txtexp" value="<?php echo @$r[10]; ?>"></td>
				</tr>
				<tr>
				  <td>upload lmage</td>
				  <td><input type="file" name="txtimg"> </td>
				</tr>
			</table>
			<p align="right">
			<?php 
				if($status=="edit")
				{

			?>
				<input type="submit" name="btnupdate" value="Update">
			<?php
				}
				else
				{
			?>
			<input type="submit" name="btnregis" value="Register">
			<?php
				}
			?>
			</p>
			</fieldset>
		</form>
