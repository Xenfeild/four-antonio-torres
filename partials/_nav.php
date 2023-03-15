<?php

$navItems =[
    [
        "section" => "Nos recettes sucrés",
        "url" => "sucres.php"
    ],
    [
        "section" => "Nos recettes salés",
        "url" => "sales.php"
    ],
    [
        "section" => "Ajouter recette",
        "url" => "add-recette.php"
    ],

]

?>
<div class="pl-96 text-2xl space-x-10 pt-2">
<?php
    foreach($navItems as $navItem) {?>
    <a href="<?= $navItem["url"] ?>"><?= $navItem["section"]?></a>

 <?php   } ?>              

</div>  

