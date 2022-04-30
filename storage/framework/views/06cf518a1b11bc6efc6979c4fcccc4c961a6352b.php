
<?php $__env->startSection('title','Once Again || Wishlist Page'); ?>
<?php $__env->startSection('main-content'); ?>
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(('home')); ?>">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Wishlist</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center">ADD TO CART</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php if(Helper::getAllProductFromWishlist()): ?>
								<?php $__currentLoopData = Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<?php 
											$photo=explode(',',$wishlist->product['photo']);
										?>
										<td class="image" data-title="No"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></td>
										<td class="product-des" data-title="Description">
											<p class="product-name"><a href="<?php echo e(route('product-detail',$wishlist->product['slug'])); ?>"><?php echo e($wishlist->product['title']); ?></a></p>
											<p class="product-des"><?php echo ($wishlist['summary']); ?></p>
										</td>
										<td class="total-amount" data-title="Total"><span>$<?php echo e($wishlist['amount']); ?></span></td>
										<td><a href="<?php echo e(route('add-to-cart',$wishlist->product['slug'])); ?>" class='btn text-white'>Add To Cart</a></td>
										<td class="action" data-title="Remove"><a href="<?php echo e(route('wishlist-delete',$wishlist->id)); ?>"><i class="ti-trash remove-icon"></i></a></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?> 
								<tr>
									<td class="text-center">
										There are no any wishlist available. <a href="<?php echo e(route('product-grids')); ?>" style="color:blue;">Continue shopping</a>

									</td>
								</tr>
							<?php endif; ?>


						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Shipping Charge Included</h4>
						
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Secure Payment</h4>
						<p>100% Secure Payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Price</h4>
						<p>Guaranteed Quality</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	
	
	<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            
	
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\470FinalProject\resources\Views/frontend/pages/wishlist.blade.php ENDPATH**/ ?>