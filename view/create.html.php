<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/Style/Style.css">
    <style>
        input {
            margin: 2rem auto;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        #go-back {
            position: fixed;
            top: 2rem;
            left: 2rem;
            color: aliceblue;
        }
        #go-back:hover {
            color: rgb(30, 30, 30);
        }
    </style>
</head>
<body>
<a href="./" class="btn btn-outline-light" id="go-back">Go back</a>
<h2 style="text-align: center; color: aliceblue;">Create car</h2>

<form method="post">
    <select class="form-control" name="type">
        <option value="normal">Normal</option>
        <option value="VIP">VIP</option>
        <option value="woman">Woman</option>
        <option value="fire">Fire fighters</option>
    </select>
    <input type="text" class="form-control" name="number" required/>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="occupied">
        <label style="color: aliceblue;" class="form-check-label">Is occupied?</label>
    </div>
    <button class="btn btn-outline-light">Submit</button>
</form>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>