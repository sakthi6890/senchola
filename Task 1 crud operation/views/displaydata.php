<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaydata</title><style>
        td{
            padding: 10px;

        }
    </style>
</head>
<body>
    <a href="<?=base_url('/index.php/Second/login')?>">back to login</a>
    <br>
    <br>
    <?php
    if(isset($data))
    {

    ?>
    <form action="<?= base_url('/index.php/second/update')?>" method="post">
        <table>
            <tr>
                <td>sno</td>
                <td><input type="text" name="sno" value="<?=$data[0]->sno?>"></td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?=$data[0]->name?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" value="<?=$data[0]->email?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" value="<?=$data[0]->password?>"></td>
            </tr>
            <tr>
                <td><button type="submit">update</button></td>
                <td></td>
            </tr>
        </table>
    </form>

    <?php
     }
    else
    { 
    ?>

        <table border="2px">
        <tr>
        <th>edit</th>
        <th>sno</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        </tr>
        <?php
        foreach($table as $row)
        {
        ?>
        
            <tr>
            <td><a href="<?= base_url('/index.php/second/edit/'.$row->sno)?>">Edit</td>
            <td><?=$row->sno?></td>
            <td><?=$row->name?></td>
            <td><?=$row->email?></td>
            <td><?=$row->password?></td>
            </tr>
        <!--
            echo $row->sno.'<br>';
            echo $row->name.'<br>';
            echo $row->email.'<br>';
            echo $row->password.'<br>';
            echo '<br>';
        -->
        <?php
        }
    }

?>
    </table>

</body>
</html>

