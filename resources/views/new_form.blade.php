<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Form Validation using PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="app.css">
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Form validation using PHP</h2>
    <!-- Form validation script -->
    <?php include('validation.php'); ?>

    <!-- Form -->
    <form action="" method="POST" novalidate>
      @csrf

      <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="email">Email</label>
        <div class="col-sm-8">
          <input type="email" name="email" class="form-control">
          <!-- Error -->
          <?php echo $emailEmptyErr; ?>
          <?php echo $emailErr; ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="name">Username</label>
        <div class="col-sm-8">
          <input type="text" name="name" class="form-control">
          <!-- Error -->
          <?php echo $nameEmptyErr; ?>
          <?php echo $nameErr; ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="pass">Password</label>
        <div class="col-sm-8">
          <input type="password" name="pass" class="form-control">
          <!-- Error -->
          <?php echo $passEmptyErr; ?>
          <?php echo $passErr; ?>
        </div>
      </div>

      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
          <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
              <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
              <label class="custom-control-label" for="female">Female</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="non-binary" name="gender" value="Non-Binary" class="custom-control-input">
              <label class="custom-control-label" for="non-binary">Non-Binary</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="other" name="gender" value="Other" class="custom-control-input">
              <label class="custom-control-label" for="other">Other</label>
            </div>
            <!-- Error -->
            <?php echo $genderEmptyErr; ?>
          </div>
        </div>
      </fieldset>

      <div class="form-group row">
        <div class="col-sm-12 mt-3">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
