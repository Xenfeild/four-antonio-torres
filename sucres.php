<?php
	include('partials/_header.php')
?>

		<!-- body/content -->
		<main>
		<section class="pb-20">
			<div class="px-48">
				<h2 class="text-5xl py-24 text-blue-900 font-bold">Nos gateaux Sucrées</h2>
				<div class="flex justify-between pl-16">
					<!-- card1 -->
					<a href="product.php">
						<div class="card w-96 bg-base-100 shadow-xl">
							<figure><img src="images/yaourt.jpeg" alt="gateau-yahourt" /></figure>
							<div class="card-body">
								<h3 class="pb-2 font-bold">Gateau au yaourt</h3>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus, iure!
								</p>
								<div class="card-actions justify-end">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card2 -->
					<a href="product.php">
						<div class="card w-96 bg-base-100 shadow-xl">
							<figure><img src="images/gateau_chocolat.jpeg" alt="gateau-chocolat" /></figure>
							<div class="card-body">
								<h3 class="pb-2 font-bold">Gateau au gateau-chocolat</h3>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus, iure!
								</p>
								<div class="card-actions justify-end">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card3 -->
					<a href="product.php">
						<div class="card w-96 bg-base-100 shadow-xl">
							<figure><img src="images/brownies_couverture.jpg" alt="brownies" /></figure>
							<div class="card-body">
								<h3 class="pb-2 font-bold">Brownies</h3>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus, iure!
								</p>
								<div class="card-actions justify-end">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				
		</section>
		</main>

		<!-- footer -->
<?php 
	include('partials/_footer.php');

?>