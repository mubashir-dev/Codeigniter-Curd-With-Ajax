<form action="" method="POST" id="CreateStudentModel">
	  <div class="form-group">
			<label for="name">Name </label>
			<input type="text" class="form-control" id="name" name="name">
			<small  class="nameError"></small>
		</div> 
		<div class="form-group">
			<label for="father_name">Father Name</label>
			<input type="text" class="form-control" id="father_name" name="father_name">
			<small  class="fatnError"></small>
		</div>
		<div class="form-group">
			<label for="Email">Email address</label>
			<input type="email" class="form-control" id="Email" name="email">
			<small  class="emailError"></small>
		</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea id="address" class="form-control" name="address" rows="3"></textarea>
				<small  class="addressError"></small>

			</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="submit_form">Save changes</button>
      </div>
		</form>
