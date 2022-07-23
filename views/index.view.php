<?php require('partials/head.php'); ?>
</ul>
<h1>Task for the day</h1>
<ul>
   <?php foreach($tasks as $task): ?>
      <?php if($task->completed == true): ?>
         <strike>
            <li>
               <?=$task->description?>
            </li>
         </strike>
         <?php else: ?>
            <li>
               <?=$task->description?>
            </li>
            <?php endif; ?> 
            
            <?php endforeach; ?> 
         </ul>
         <?php require('partials/footer.php'); ?>
         
 
                                                              