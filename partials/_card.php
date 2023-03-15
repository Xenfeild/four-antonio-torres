<!-- card1 -->
<a href="product.php">
<div class="card w-96 bg-base-100 shadow-xl">
	<figure><img src="<?= $img ?>" alt="<?php $name ?>" /></figure>
		<div class="card-body">
    		<h3 class="pb-2 font-bold"><?php $name ?></h3>
			<p>
				<?php $description ?>
			</p>
			<div class="card-actions justify-end">
				<p><?php $nbAvis ?> avis</p>
					<p class="text-right text-sm">
	    				Note : <span class="text-bold-700"><?php $note ?>/5</span>
					</p>
			</div>
		</div>
	</div>
</a>