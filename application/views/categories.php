<?php
foreach ($categories as $row) { ?>
   <ul class="list-group list-group-flush">
      <li class="list-group-item">
         <p> <?= $row->cat_name; ?> </p>
      </li>
   </ul>
<?php } ?>