<?php
	include('partials/_header.php')
?>
		<!-- body/content -->
		<main class="px-48">
			<h2 class="flex justify-center text-5xl py-10 text-blue-900 font-extrabold">Titre de la recette</h2>
			<!-- box image -->
			<div class="h-400px flex justify-center ">
				<img src="images/gateau_chocolat.jpeg" alt="gateau au chocolat" />
			</div>
			<!-- box information de la recette -->
			<div class="py-5 flex justify-center space-x-10 text-2xl text-indigo-900 font-extrabold">
				<!-- durée recette -->
				<div class="">
					<p>30 min</p>
				</div>
				<!-- dificulté recette -->
				<div class="">
					<p>Facile</p>
				</div>
				<!-- budget recette -->
				<div class="">
					<p>Bon marché</p>
				</div>
			</div>
			<!-- box etape recette -->
			<div class="w-70">
				<!-- etape 1 -->
				<div class="w-70">
					<h2 class="text-3xl pb-5">Etape 1</h2>
					<p class="text-xl pb-10">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
				<!-- etape 2 -->
				<div class="box_etape">
					<h2 class="text-3xl pb-5">Etape 2</h2>
					<p class="text-xl pb-10">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
			</div>
		</main>

		<!-- footer -->
		<?php 
	include('partials/_footer.php');

?>
