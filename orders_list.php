<?php include("inc/header.php");?>	
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Orders List</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_30">Orders List</h2>
							<!--orders list table-->
							<table class="table_type_3 responsive_table full_width r_corners wrapper shadow bg_light_color_1 m_bottom_30 t_align_l">
								<thead>
									<tr class="f_size_large">
										<!--titles for td-->
										<th>Order Number</th>
										<th>Order Date</th>
										<th>Order Status</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<!--order number-->
										<td data-title="Order Number"><a href="order_details.html" class="color_dark">4daf03</a></td>
										<!--order date-->
										<td data-title="Order Date">2013-01-03</td>
										<!--order status-->
										<td data-title="Order Status">Confirmed by shopper</td>
										<!--quanity-->
										<td data-title="Total"><span class="f_size_large fw_medium scheme_color">$102.00</span></td>
									</tr>
									<tr>
										<!--order number-->
										<td data-title="Order Number"><a href="order_details.html" class="color_dark">4daf03</a></td>
										<!--order date-->
										<td data-title="Order Date">2013-01-03</td>
										<!--order status-->
										<td data-title="Order Status">Confirmed by shopper</td>
										<!--quanity-->
										<td data-title="Total"><span class="f_size_large fw_medium scheme_color">$102.00</span></td>
									</tr>
									<tr>
										<!--order number-->
										<td data-title="Order Number"><a href="order_details.html" class="color_dark">4daf03</a></td>
										<!--order date-->
										<td data-title="Order Date">2013-01-03</td>
										<!--order status-->
										<td data-title="Order Status">Confirmed by shopper</td>
										<!--quanity-->
										<td data-title="Total"><span class="f_size_large fw_medium scheme_color">$102.00</span></td>
									</tr>
								</tbody>
							</table>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large scheme_color d_block relative">
												<b>Women</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul>
														<li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Party Dresses</a></li>
													</ul>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Men</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul class="d_none">
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul class="d_none">
														<li><a href="#" class="color_dark d_block">Evening</a></li>
														<li><a href="#" class="color_dark d_block">Casual</a></li>
														<li><a href="#" class="color_dark d_block">Party</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Kids</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
										</li>
									</ul>
								</div>
							</figure>
						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
<?php include("inc/footer.php");?>