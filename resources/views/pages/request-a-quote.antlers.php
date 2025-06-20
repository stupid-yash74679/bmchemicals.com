<!-- Breadcrumb Area Start -->
<div class="breadcrumb__area" style="background-image: url('assets/img/pages/breadcrumb.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb__area-content">
					<h2>Request Quote</h2>
					<ul>
						<li><a href="/">Home</a><i>/</i></li>
						<li>Request Quote</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->

<!-- Request Quote Page Start -->
<div class="request__quote section-padding-three">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<form action="#">
					<div class="row">
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>First Name<span> *</span></label>
								<input type="text" name="name" placeholder="Michael" required>
							</div>
						</div>
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>Last Name</label>
								<input type="text" placeholder="Brown">
							</div>
						</div>
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>Email Address<span> *</span></label>
								<input type="email" placeholder="michaelbrown@example.com" required>
							</div>
						</div>
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>Phone Number<span> *</span></label>
								<input type="text" placeholder="+1 214 555 1234" required>
							</div>
						</div>
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>Company / Farm Name<span> *</span></label>
								<input type="text" placeholder="Green Valley Orchards" required>
							</div>
						</div>
						<div class="col-md-6 mt-25">
							<div class="request__quote-item">
								<label>Website (optional)</label>
								<input type="url" placeholder="https://greenvalley.com">
							</div>
						</div>
						<div class="col-md-12 mt-25">
							<p class="mb-10">What products are you interested in?<span> *</span></p>
							<div class="row">
								<div class="col-md-4">
									<div class="request__quote-services">
										<label><input class="mr-10" type="checkbox">EDTA Chelated Micronutrients</label>
										<label><input class="mr-10" type="checkbox">Humic & Fulvic Acids</label>
										<label><input class="mr-10" type="checkbox">Micronutrient Blends</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="request__quote-services">
										<label><input class="mr-10" type="checkbox">Water Soluble Fertilizers</label>
										<label><input class="mr-10" type="checkbox">Nutraceutical Ingredients</label>
										<label><input class="mr-10" type="checkbox">Soil Conditioners</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="request__quote-services">
										<label><input class="mr-10" type="checkbox">Custom Formulations</label>
										<label><input class="mr-10" type="checkbox">Bulk Orders / Wholesale</label>
										<label><input class="mr-10" type="checkbox">Other</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 mt-25">
							<div class="request__quote-item">
								<label>Message<span> *</span></label>
								<textarea name="message" placeholder="Tell us what you're looking for, quantity, crop type, delivery timeline, or any custom requirement."></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<button class="default_button mt-25" type="submit">Request a Quote<i class="flaticon-right-up"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Request Quote Page End -->
{{ partial src="_parts/footer-cta" }}

