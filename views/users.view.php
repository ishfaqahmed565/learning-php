<?php require('partials/head.php'); ?>
</ul>
<h1>Users</h1>
<ul>
   <?php foreach($users as $user): ?>
      <li>
         <?php echo $user->name; ?>
      </li>
         
             
            <?php endforeach; ?> 
         </ul>
         <form action="users" method="POST">
            <input name="name">
            <button type="submit">Submit</button>
</form>
<?php require('partials/footer.php'); ?>