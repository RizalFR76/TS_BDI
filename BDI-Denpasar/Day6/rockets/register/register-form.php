<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Form PHP</title>
    <link rel="stylesheet" href="image-area.css">
    <script src="image-area.js"></script>
</head>
<body>
    <div class="container mt-5 card">
        <h1 class="mt-3">Register Form</h1>
        <hr>
        <form method="post" action="register-form.php" enctype="multipart/form-data">
            <label for="Nama">Image</label>
            <div class="custom-file">
                <input name="foto" type="file"  class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose image</label>
              </div>
              <!-- <img id='img-upload'/> -->

              <!-- <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
              <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div> -->
            <div class="form-group">
                <label for="Nama">Name</label>
                <input class="form-control" type="text" id="Nama" name="name" placeholder="Your name">
            </div>
            <div class="form-group">
                <label for="NIK">NIK</label>
                <input class="form-control" type="number" id="NIK" name="NIK" placeholder="Your NIK">
            </div>
            <div>
                <label for="" class="mr-2" name="gender">Gender</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="male" id="lakiLaki" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="lakiLaki" >Laki-laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="female" id="prempuan" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="prempuan">Prempuan</label>
                  </div>
            </div>
            <div class="form-group">
                <label for="HomeAddress">Address</label>
                <input name="address" type="text" class="form-control" id="HomeAddress" placeholder="Your Address">
            </div>
            <div class="form-group">
                <label for="mobilePhone">Mobile Phone</label>
                <input name="mobilePhone" type="number" class="form-control" id="mobilePhone" placeholder="Your Mobile Phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" value='<?php echo $email?>' type="email" class="form-control" id="email" aria-describedby="emailHelp" disabled>
                <small id="emailHelp" class="form-text text-muted">Make sure your email never registered in here!</small>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input name="password" type="text" class="form-control" id="Password" placeholder="Your Password">
                <small id="passwordHelp" class="form-text text-muted">Use the best combination</small>
            </div>
            <div class="form-group">
                <label for="PasswordConfirmation">Password Confirmation</label>
                <input type="text" class="form-control" id="PasswordConfirmation" placeholder="Re-type your Password">
                <small id="passwordHelp" class="form-text text-muted">Make sure the password same like above!</small>
            </div>
            <hr>
            <center class="mb-3">                
                <button type="submit" class="btn btn-primary">Submit</button>            
            </center>
        </form>
    </div>
    
</body>
</html>
