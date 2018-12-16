<?php include('inc/header.php'); ?>
	<!-- start: Header -->
	
<?php include('inc/sidebar.php'); ?>		
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>



         <?php

             if (isset($page)) {
             	if ($page=='category_form.php') {
             		include'./pages/category_form.php';
             	}
             	if ($page=='manage_cat_info.php') {
             		include'./pages/manage_cat_info.php';
             	}
             }

         ?>





		<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	<?php include('inc/footer.php');?>