<?php foreach ($wisk_shop_categories as $row) { ?>
<ul class="list-group list-group-flush">

   <li class="list-group-item">
      <p> <?= $row(1)->cat_name ?> </p>
   </li>

   <li class="list-group-item">
      <p> <?= $row(2)->cat_name ?> </p>
   </li>

   <li class="list-group-item">
      <p> <?= $row(3)->cat_name ?> </p>
   </li>

   <li class="list-group-item">
      <p> <?= $row(4)->cat_name ?> </p>
   </li>

</ul>
<?php } ?>