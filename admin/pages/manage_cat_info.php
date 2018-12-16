






<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage Category Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category Id</th>
								  <th>Category Name</th>
								  <th>Category Discription</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

		<?php


$sql = "SELECT * FROM category order by category_id desc";
$category = $db->select($sql);
if ($category) {
	$i = 0;
	while ($result =$category->fetch_assoc()) {
		$i++;
?>				  	
							<tr>
								<td><?php echo $result['category_id']; ?></td>
								<td class="center"><?php echo $result['category_name']; ?></td>
								<td class="center"><?php echo $result['discription']; ?></td>
								<td class="center">
									<?php
									if($result['publication']==1)
									{
									?>
									<span class="label label-success"><?php echo $result['publication']; ?></span>
									<?php }else{?>
									<span class="label label-important"><?php echo $result['publication']; ?></span>
                                       <?php } ?>
								</td>
								<td class="center">
									<?php
									if($result['publication']==0)
									{
									?>
									<a class="btn btn-success" href="">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									<?php }else{?>
									<a class="btn btn-danger" href="">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									 <?php } ?>
									<a class="btn btn-info"  href="editcat.php?catid=<?php $result['category_id'];?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you confirm to delete')" href="managecategory.php?delid=<?php $result['category_id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
				<?php    } } ?>			
							

							
						</tbody>
					
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

				