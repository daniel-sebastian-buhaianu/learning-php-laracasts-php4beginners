<?php 
    $notes = $vars['notes']; 
?>
<ul>
    <?php foreach($notes as $note) : ?>
        <li class="pt-3 pb-3"><?= $note['body'] ?></li>
        <hr>
    <?php endforeach; ?>
</ul>