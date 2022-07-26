<?php require('partials/head.php'); ?>
</ul>
<h1>Names</h1>
<ul>
   <?php foreach($names as $name): ?>
      <li>
         <?php echo $name->name; ?>
      </li>
         
             
            <?php endforeach; ?> 
         </ul>
         <form action="names" method="POST">
            <input name="name">
            <button type="submit">Submit</button>
</form>
         <?php require('partials/footer.php'); ?>

         
 
                                                              