<html ng-app="myApp">
	<head>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
 <script src="list.js"></script>
		<title>
		This code php page.
		</title>
	</head>
	 <body>
	  <a href="edit.php">Add User</a>
			<div ng-app="myApp" ng-controller="customersCtrl"> 
				<table border ="1px solid black">
					<tr> <th>Name</th> <th>Email</th> <th>Edit</th><th>Delete</th> </tr>
				  <tr ng-repeat="x in names">
					<td>{{ x.firstName }}</td>
					<td>{{ x.email }}</td>
					<td><a href="edit.php?eid={{x.employeeNumber}}"> Edit</a></td>
					<td><a href="delete.php?eid={{x.employeeNumber}}"> Delete</a></td>
				  </tr>
				</table>

			</div>

	</body>
</html>