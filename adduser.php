<html>
<?php 
//include ('header.php');
@$message=$_GET['message']; ?>

  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
#cont{
  border: 1px solid black;
}

</style>

  <title>AddUser</title>
  
</head>
<body>
  <br/><br/><br/>
<div class="panel panel-default">
            <div class="panel-body"><b><?php echo $message ?></b>
            </div>
            </div>
  <div class="container" id="divb">
    <br/><p style="color: #ff0000">Field marked with * needs to be filled compulsary<br/>
<form method="POST" action="insertuser.php" class="jumbotron" style="border:1px">
  
   
      <div class="row">
         <div class="col-lg-2">
              <label >Name<span style="color: #ff0000">*</span></label>
            </div>
          <div class="col-lg-3 form-group">
          <input type="text" class="form-control col-lg-3" name="name" id="name" required />
          </div>

          <div class="col-lg-1">
          <label>Email<span style="color: #ff0000">*</span></label>
        </div>
        <div class="col-lg-3 form-group">
          <input type="text" class="form-control" name="email" id="email" required />
          </div>
      </div>
      <div class="row">
      <div class="col-lg-1">
            <label>Password<span style="color: #ff0000">*</span></label>
          </div>
          <div class="col-lg-3 form-group">
            <input type="password" class="form-control" name="password" id="password" required />
          </div>
      </div>
      <div class="row">
       <button type="submit" name="submitt" id="submitt" class="btn btn-success center-block">Submit</button>
          </div>
        
</form>
  </div>
</body>
</html>
