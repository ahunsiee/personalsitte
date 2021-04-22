<!DOCTYPE html>
<html>
<head>
	<title>message</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md">
				<table class="table" border="1">
					<tr class="alert alert-danger">
						<th>S/N</th>
						<th>Name</th>
						<th>email</th>
						<th>comment</th>
					</tr>
					<?php
						foreach ($admin as $admin) {
							
						
					?>
					<tr>	
						<td class="alert alert-secondary">{{$admin->admins_id}}</td>
						<td class="alert alert-secondary">{{$admin->fullname}}</td>
						<td class="alert alert-secondary">{{$admin->email}}</td>
						<td class="alert alert-secondary">{{$admin->comment}}</td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>