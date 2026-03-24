 <div id="smooth-wrapper">
 	<div id="smooth-content">

 		<!-- Breadcrumb Section Start -->
 		<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
 			<div class="container">
 				<div class="page-heading">
 					<div class="breadcrumb-sub-title">
 						<h1 class="text-white wow fadeInUp" data-wow-delay=".3s">About us</h1>
 					</div>
 					<ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
 						<li>
 							<a href="index.html">
 								<i class="fa-solid fa-house"></i> Home
 							</a>
 						</li>
 						<li>
 							/
 						</li>
 						<li>
 							About us
 						</li>
 					</ul>
 				</div>
 			</div>
 		</div>

 		<!-- About Section Start -->
 		<?php $this->load->view('component/brand');?>

 	    <?php $this->load->view('component/feature')?>

 	    <?php $this->load->view('component/journey')?>


 		<!-- Testimonial Section Start -->
 		<?php $this->load->view('component/testimonial');?>

        <!-- Brand Section Start -->
 		

 		<!-- Faq Section Start -->
 		<?php $this->load->view('component/faq');?>

 		

 		
