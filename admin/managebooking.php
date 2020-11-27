<html>
<script type="text/javascript" src="../seating/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../seating/js/underscore-min.js"></script>
	<script type="text/javascript" src="../seating/js/backbone.js"></script>
	<link rel="stylesheet" type="text/css" href="../seating/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../seating/css/prima.css">
    <body>
<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Number of Seats</th>
						<th>Seats</th>
					</tr>
				</thead>
				<tbody id="ticket-sold-info">
					<script type="text/template" id='table-ticket-info'>
						<% _.each(items,function(item){%>
							<tr>
								<td><%-item.names%></td>
								<td><%-item.numbers%></td>
								<td><%-item.seats%></td>
							</tr>
						<%})%>
					</script>
				</tbody>
				
			</table>
        </div>
        <script type="text/javascript" src="../seating/js/prima.js"></script>
                        </body>
                        </html>