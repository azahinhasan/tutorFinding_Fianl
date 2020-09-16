<?php
require_once 'model_z.php';
function fetchAllStudents()
{
    return showAll();
}


$students = showAll();

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Rank</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $i => $student) : ?>
                <tr>
                    <td><?php echo $student['ID'] ?></td>
                    <td><?php echo $student['Name'] ?></td>
                    <td><?php echo $student['Email'] ?></td>
                    <td><?php echo $student['Phone'] ?></td>
                    <td><?php echo $student['Gender'] ?></td>
                    <td><?php echo $student['Type'] ?></td>
                    <td><a href="removeAdmin.php?Email=<?php echo $student['Email'] ?>" onclick="return confirm('do you want to delete Y/N')">Delete</a></td>
                    <td><a href="changeRank.php?Email=<?php echo $student['Type']  ?>" onclick="return confirm('do you want to change Y/N')">Change</a></td>
                    </script>

                </tr>
            <?php endforeach; ?>


        </tbody>


    </table>


</body>

</html>