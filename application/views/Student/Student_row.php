<tr id="row-<?php echo $row['student_id'] ?>">
	<td class="modelid"><?php echo $row['student_id'] ?></td>
	<td class="modelname"><?php echo $row['student_name'] ?></td>
	<td class="modelfather_name"><?php echo $row['father_name'] ?></td>
	<td class="modelemail"><?php echo $row['email'] ?></td>
	<td class="modeladdress"><?php echo $row['address'] ?></td>
	<td><a href="#"  onclick="showUpdateForm(<?php echo $row['student_id'] ?>)" data-toggle="modal" data-target="#updateStudentModel">Edit</a>  | <a href="#" onclick="deleteRecored(<?php echo $row['student_id']?>)">Delete</a></td>
</tr>
