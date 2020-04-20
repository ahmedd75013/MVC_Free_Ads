<?php
$errors="";

$db = mysqli_connect("localhost","root","");

if (isset($_POST['submit'])){
    if(empty($_POST['task'])){
        $errors ="You must fill in the task";
    }else{
        $task =$_POST['task'];
        $sq ="INSERT INTO tasks (task) VALUES ('$task')";
        mysqli_query($db ,$sql);
        header('location :todo.php');
    }
}

?>
<?php if (isset($errors)){ ?>
    <p><?php echo $errors;?></p>

<?php }?>
</form>
<table>e
    <thead>
        <tr>
            <th>N</th>
            <th>TASK</th>
</tr>
<thead>
    <tbody>
        <?php
        $tasks = mysqli_query($db,"SELECT * FROM tasks");
$i = 1;while($row =mysqli_fetch_array($tasks)){ ?>
<tr>
    <td><?php echo $i;?></td>
    <td class="delete">
        <a href ="todo.php?del_task=<?php echo $row['id']?></td>
</tr>
<?php $i++;}?>
</tbody>


