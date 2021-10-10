<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--load twitter bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Book Name</th>
                        <th>Category Name</th>
                        <th>Author Name</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i=0;$i<count($books);$i++) { ?>
                <tr>
                    <td><?php echo ($i+1); ?></td>
                    <td><?php echo $books[$i]->book_id; ?></td>
                    <td><?php echo $books[$i]->book_title; ?></td>
                    <td><?php echo $books[$i]->category; ?></td>
                    <td><?php echo $books[$i]->author; ?></td>
                    <td><?php echo $books[$i]->quantity; ?></td>
                    <td><?php echo $books[$i]->status; ?></td>

                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>