<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Signin</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="Age">Reg NO:</label>
      <input type="text" class="form-control" id="regno" placeholder="Enter Registration No" name="regno">
    </div>
    <div class="form-group">
        <label for="fname">Class:</label>
        <div class="radio">
        <label><input type="radio" name="class" value="BSSE">BSSE</label>
        <label><input type="radio" name="class" value="BSCS">BSCS</label>
        <label><input type="radio" name="class" value="BSIT">BSIT</label>
        <label><input type="radio" name="class" value="BSAI">BSAI</label>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Signin</button>
  </form>
</div>

</body>
</html>
