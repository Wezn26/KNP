<?php 
/*
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>

<h1>Add Movie Page</h1>

<form action="" method="post">
    <p>Name:</p>
        
    <div>
        <input type="text" name="name"> 
    </div>
    
    <ul>
        <li style="color: red">Error1</li>
        <li style="color: red">Error2</li>        
    </ul>
    
    <div>
        <button type="submit">Add</button>
    </div>

</form>

<?php $view->component('end') ?>