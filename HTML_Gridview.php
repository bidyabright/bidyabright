<!-- SQL TABLE :tml_sql_table_gridview
SQL ROW : Gridview_Heading,Gridview_Paragraph,Gridview_Code,Gridview_Output,Gridview_Note
SQL LINK : $GridviewHeading,$GridviewParagraph,$GridviewCode,$GridviewOutput,$GridviewNote
TEXT BOX : Gridview_Heading,Gridview_Paragraph,Gridview_Code,Gridview_Output,Gridview_Note
FORM NAME : gridview -->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
</style>
<body>
	<div class="row"> <!-- HTML Font START -->
	<?php
		$count=1; //repert row start
		$sel_query="Select * from html_sql_table_gridview ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
	while($row = mysqli_fetch_assoc($result)) { 
    ?>
	
	<!-- ==========card start part -1================ -->
	<div class="col-12 col-sm-6">
		<div class="card card-shadow card-grid-view M-B-30">
			<h4 class="card-title"><?php echo $row["Gridview_Heading"]; ?></h4>
			<?php if($row['Gridview_Heading'] != ""): ?>
				<div class="gridview-card">
				<img src="uploads/<?php echo $row['Gridview_Output']; ?>" width="100%" height="auto" class="card-img-top">
				<?php else: ?>
				<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
				<?php endif; ?>
				
				<!-- card content -->
				<p><?php echo $row["Gridview_Paragraph"]; ?></p>
		
				</div>
				<!-- card down text and button content -->
				<small class="text-muted"><?php echo $row["Gridview_Note"]; ?></small>
				<div class="card-footer">
					<a class="btn btn-default pull-right" role="button" data-toggle="modal" data-target="#exampleModalLong5"><i class="glyphicon glyphicon-edit"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
					<a href="#" class="btn btn-code-card" role="button">HTML</a>
					<a href="#" class="btn btn-code-card" role="button">CSS</a>
					<a href="#" class="btn btn-code-card" role="button">JS</a></div>
				
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"><h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<?php echo $row["Gridview_Code"]; ?>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $count++; } //repert row end
		?>
	</div>
</body>
</html>