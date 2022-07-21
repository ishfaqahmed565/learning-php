<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  
    </style>
</head>

<body>
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
</body>
</html>
 
                                                              