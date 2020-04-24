<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naive Bayes Classification</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="<?=url('/')?>">Naive Bayes Classification</a>
        </div> 
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center mt-4">Input data yang akan dilakukan klasifikasi</h1>
            <form action="{{ url('result') }}" method="POST">
                <?php $i = 0; foreach ($columns as $key => $column) { ?>
                <div class="form-group">
                    <label><?=$key?></label>
                    <select class="custom-select" id="<?=$key?>" name="<?=$i++?>" required>
                        <?php foreach($column as $key => $value) { ?>
                        <option value="<?=$value?>"><?=$value?></option>
                        <?php } ?>
                    </select>
                </div> 
                <?php } ?>               
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>