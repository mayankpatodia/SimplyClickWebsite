<?php 
  require_once('phpfiles/db.php');

  $sql="SELECT * FROM category";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body{
            padding: 15px 0px;
            background: #fafafa;
        }
        .card{
            box-shadow: 0px 0px 1px #ccc;
            background: #fff;
            padding: 25px;
        }
        .upload-block{
            padding: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="card">
                <form enctype="multipart/form-data" method="post" action="phpfiles/upload_form.php">
                    <div class="form-group">
                        <label for="userName">Your Name</label>
                        <input type="text" class="form-control" id="userName" name="username" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="themeName">Theme Name</label>
                        <input type="text" class="form-control" id="userName" name="themename" placeholder="Name of the Theme">
                    </div>
                    <div class="form-group">
                        <label for="themeDescription">About your Theme</label>
                        <textarea type="text" class="form-control" id="themeDescription" rows="5" name="abouttheme" placeholder="About your theme"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="category">Select Category (select one):</label>
                      <select class="form-control" id="category" name="category">

                      <?php
                            if ($result=mysqli_query($conn,$sql))
                              {
                              while ($row=mysqli_fetch_row($result))
                                { ?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                    <?php
                                }
                            }
                        ?>
                      </select>
                      <input type="text" name="cat_name" id="cat_name" value="Other" hidden="hidden" />
                     </div>
                     <p class="help-block">Example block-level help text here. Brief description of the selected Category.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group upload-block">
                              <label for="themeImage">Theme Cover Image</label>
                              <input type="file" id="coverImage" name="coverImage">
                            </div>
                            <div class="form-group upload-block">
                              <label for="zipFile">Select your Website Zip file</label>
                              <input type="file" id="zipFile" name="zip_file" />
                          </div>
                        </div>
                    </div>
                        <div class="form-group">
                          <button type="submit" style="float: right;" class="btn btn-default">Submit</button>
                        </div>

</body>
</html>
