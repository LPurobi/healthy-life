<div class="sideBar">
   <h1>Recent Post</h1>
   <ul>
   <?php foreach($histories as $history) : ?>
     <li><a href="#"><?= "{$history['month']} {$history['year']} ({$history['total']})"?></a></li>
   <?php endforeach; ?>
   </ul>
</div>
