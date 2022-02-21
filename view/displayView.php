<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
<section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($data["employees"] as $employee) {?>
                <?php echo $employee["id"]; ?> -
                <?php echo $employee["Name"]; ?> -
                <?php echo $employee["email"]; ?> -
                <?php echo $employee["phone"]; ?>
                <div class="right">
                    <a href="index.php?controller=employees&action=detail&id=<?php echo $employee['id']; ?>" class="btn btn-info">details</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
</body>
</html>