<div id="credential">
			<form class="form col-md-12 center-block" action="change_password.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Enter Username" name="username" type="text">
				</div>
				
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Enter Password" name="Password" type="password">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Confirm New Password" name="confirm_new_password" type="password">
				</div>
				<div class="form-group">
					<select class="form-control input-lg"  name="confirm_new_password" type=""><option>Admin</option>
																							   <option>Manager</option>
																							   <option>Supervisor</option>
																							   <option>Sales person</option>
				</div>


				<div class="form-group">
					<button class="btn btn-primary btn-lg">Proceed</button>
				</div>			    
			</form>
		</div>