@props(
    [
        "name" => "",
        "classes" => ""
    ]
)
<div {{ $attributes->merge(["class" => "shop-item " . $classes]) }}>
					<div class="inner-box">
						<div class="image">
							<a href="shop-detail.html"><img src="../front/images/resource/products/1.png" alt="" /></a>
							<span class="tag flaticon-heart"></span>
							<div class="cart-box text-center">
								<a class="cart" href="#">Add to Cart</a>
							</div>
						</div>
						<div class="lower-content">
							<h6><a href="shop-detail.html"> {{ $name }} <br> particles</a></h6>
							<div class="d-flex justify-content-between align-items-center">
								<div class="price"><span>$239.52</span> $362.00</div>
								<!-- Quantity Box -->
								<div class="quantity-box">
									<div class="item-quantity">
										<input class="qty-spinner" type="text" value="1" name="quantity">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>