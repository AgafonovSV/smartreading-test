<script setup>
	import SiteLogo from '@/components/svg/SiteLogo.vue'
	import Buy from '@/components/svg/Buy.vue'
</script>

<template>
	<header>
		<nav class="navbar navbar-expand-md fixed-top bg-header">
			<div class="container">
				<a class="navbar-brand" href="#">
					<SiteLogo></SiteLogo>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
					aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="nav nav-fill poppins-medium w-100">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Ivi Green</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">For educators</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
				</div>
				<div>
					<ul class="nav nav-fill poppins-medium w-100">
						<li class="nav-item">
							<a class="nav-link" href="#">
								<div class="d-inline-block position-relative">
									<span class="position-absolute translate-middle badge rounded-pill buy-badge">0</span>
									<Buy></Buy>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</template>