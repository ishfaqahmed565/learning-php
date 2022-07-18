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
                <li>
                   <strong>Name : </strong> <?=  $task['title'] ;?>
                </li>
                
                <li>
                   <strong>Due Time : </strong> <?=  $task['due'] ;?>
                </li>
                
                <li>
                   <strong>Person Responsible : </strong> <?=  $task['assigned_to'] ;?>
                </li>
                
                <li>
                   <strong>Status: </strong> 
                    <?php if($task['completed']): ?>
                       <span> 
                       &#9989
                       </span>
                    <?php else: ?>
                       <span class="status">
                       &#10062
                       </span>
                    <?php endif; ?>
                    
                </li>
        </ul>
</body>
</html>
 
                                                              