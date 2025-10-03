<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- added bootstrap, because plain html was "starting to hurt" my eyes! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href ="https://img.icons8.com/ios/50/000000/apple-calculator.png" type = "image/x-icon">
    <title>Emoji Calculator</title>
</head>

<body>
    <div class="text-center m-5">
        <h1>Emoji Calculator</h1>
    </div>
    <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post" class="row text-center m-5">
        <!-- input for operand 1 -->
        <div class="col input-group m-1">
            <span class="input-group-text">Operand 1</span>
            <input type="text" name="op1" class="form-control" placeholder="Should be an integer">
        </div>
        <!-- input for operand -->
        <div class="col m-1">
            <select name="operator" class="form-select" aria-label="Default select example">
                <option selected>Operator</option>
                <option value="add">&#x1F47D</option>
                <option value="sub">&#x1F480</option>
                <option value="mul">&#x1F47B</option>
                <option value="div">&#x1F631</option>
            </select>
        </div>
        <!-- input for operator 2 -->
        <div class="col input-group m-1">
            <span class="input-group-text">Operand 2</span>
            <input type="text" name="op2" class="form-control" placeholder="Should be an integer">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary m-1">Calculate</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>