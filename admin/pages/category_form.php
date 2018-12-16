<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['category_name'];
	$description = $_POST['description'];
	$publication = $_POST['publication'];

	$name = mysqli_real_escape_string($db->link, $name);
	$description = mysqli_real_escape_string($db->link, $description);
	$publication = mysqli_real_escape_string($db->link, $publication);

	if ($name=="" || $description=="" || $publication=="" ) {
		echo "Fil Must Not be Empty";
	}else{

		 $sql = "INSERT INTO category(category_name,discription,publication) VALUES('$name','$description','$publication')";
              $result = $db->insert($sql);
              
              if ($result) {
         echo  "<span class='success'>Category inserted Succeesfully....!!</span>";
       } else {
         echo  "<span class='error'>Category Not Inserted....!!</span>";
       }
	}
}

?>

<h2>

</h2>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="category_name" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>
							

							         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Publication Status </label>
							  <div class="controls">
								<select name="publication">
									<option >select Status</option>
									<option value="1">Published</option>
									<option value="0">UnPublished</option>
								</select>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name-"btn" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->