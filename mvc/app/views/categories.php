<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
     
        </thead>
        <tbody>
            <?php foreach($categories as $pro):?>
                <tr>
                    <td><?= $pro['id']?></td>
                    <td><?= $pro['cate_name']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>