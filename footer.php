<footer id="footer" style="background-color:black; color:white;">
			<!-- top footer -->
			<div class="section" style="background-color:black; color:white;">
				<!-- container -->
				<div class="container" style="background-color:black; color:white;">
					<!-- row -->
					<div class="row" style="background-color:black; color:white;">
						<div class="col-md-3 col-xs-6" style="background-color:black; color:white;">
							<div class="footer" style="background-color:black; color:white;">
								<h3 class="footer-title" style="background-color:black; color:white;">About Us</h3>
								<p>This is my Small Database Management System mini project</p>
								<ul class="footer-links" style="background-color:black; color:white;">
									<li style="color:white;"><a href="#"><i class="fa-map-marker text-light"></i>Surat</a></li>
									<li style="color:white;"><a href="#"><i class="fa-phone"></i>+91-9982790270</a></li>
									<li style="color:white;"><a href="#"><i class="fa-envelope-o"></i>davep90167@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center text-white" style="margin-top:80px;">
							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Shopping<i class="fa fa-heart-o" aria-hidden="true"></i> by Dave
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>

						<div class="col-md-3 col-xs-6" style="color:white;">
							<div class="footer" style="color:white;">
								<h3 class="footer-title" style="color:white;">Categories</h3>
								<ul class="footer-links" style="color:white;">
									<li><a href="#">Mobiles</a></li>
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
