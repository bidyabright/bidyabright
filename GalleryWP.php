<!-- SQL TABLE : sql_table_gallerywp
SQL TABLE ROW : GalleryWP_Heading,GalleryWP_Paragraph,GalleryWP_Code,GalleryWP_Output,GalleryWP_Note
SQL CONNECTION ID : $PluginsParagraph,'$PluginsCode,$PluginsOutput,$PluginsNote
TEXTBOX NAME : GalleryWP_Heading,GalleryWP_Paragraph,GalleryWP_Code,GalleryWP_Output,GalleryWP_Note
FORM NAME : newplugins
-->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
.modal-body{
	overflow: scroll;
	white-space: normal;
}
</style>
<body>
	<div class="row"> <!-- HTML Font START -->
	<?php
		$count=1; //repert row start
		$sel_query="Select * from sql_table_gallerywp ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
	while($row = mysqli_fetch_assoc($result)) {
	?>
	
	<!-- ==========card start part -1================ -->
	<div class="col-12 col-sm-4">
		<div class="card card-shadow M-B-30">

			<h4 class="card-title"><?php echo $row["GalleryWP_Heading"]; ?></h4>
			<div class="card-block">
			<?php if($row['GalleryWP_Heading'] != ""): ?>
			<img src="uploads/<?php echo $row['GalleryWP_Output']; ?>" width="100%" height="auto" class="card-img-top">
			<?php else: ?>
			<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
			<?php endif; ?>
			</div>
				<!-- card content -->
				<!-- card down text and button content -->
				<div class="card-footer">
					<p class="card-text"><small class="text-muted"><?php echo $row["GalleryWP_Note"]; ?></small></p>
					<a class="btn btn-default pull-right" role="button" data-toggle="modal" data-target="#exampleModalLong5"><i class="glyphicon glyphicon-edit"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
					<a href="#" class="btn btn-code-card" role="button">DOWNLOAD</a>
					<a href="#" class="btn btn-code-card" role="button">BUY NOW</a></div>
			
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"><h5 class="modal-title" id="exampleModalLongTitle"></h5>
								
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<?php echo $row["GalleryWP_Code"]; ?>
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