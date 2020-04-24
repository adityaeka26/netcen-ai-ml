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
            <h1 class="display-4 text-center mt-4">Welcome!</h1>
            <section>
                <form class="was-validated mt-5" action="{{ url('exec') }}" method="POST" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="train" name="train" required>
                        <label class="custom-file-label" for="train" id="label">Choose CSV file...</label>
                        <div class="invalid-feedback">No File Choosen</div>
                    </div>
                    <center>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </center>
                </form> 
            </section>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $('#train').on('change', function(e) {
            if ($('#train')[0].files.length === 0) { 
                $('#label').html('Choose CSV file...')
            } else { 
                var name = $('#train').val().split('\\').pop()
                $('#label').html(name)
            }
        })
    </script>
</body>
</html>