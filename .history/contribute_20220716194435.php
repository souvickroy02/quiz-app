<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute Questions</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="home.css">
    
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <form role="form" method="post" action="api/question_submit.php">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="color: black">Questions</label>
                        <input type="text" name="question" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Answers</label>
            <input type="text" name="answer" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option1</label>
            <input type="text" name="op1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option2</label>
            <input type="text" name="op2" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option3</label>
            <input type="text" name="op3" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option4</label>
            <input type="text" name="op4" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>