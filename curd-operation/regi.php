<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg page</title>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<section class="container  bg-primary m-5 p-5">

  <form action="regi.php" method="post">

      <div>
          <h1>Regi form </h1>
        
          <img src="reg.png" class="img-fluid d-block mx-auto" alt="Responsive image" height="300" width="300" >
      </div>

      <div class="form-group mt-3"> 
      First Name : 
          <input type="text" class="form-control" name="first_name" id="name"   placeholder="first name">
      </div>

    <div class="form-group mt-3"> 
      Last Name: 
          <input type="text" class="form-control" name="last_name" id="name"   placeholder="last name">
    </div>

    <div class="form-group mt-3"> 
      Phone no : 
          <input type="number" class="form-control" name="phone_number" id="name"  placeholder="phone no">
    </div>

    <div class="form-group mt-3"> 
      Email : 
      <input type="email" class="form-control" id="exampleInputEmail1"   placeholder="Enter email"> 
    </div>

    <div class="form-group mt-3">
      Password:
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group mt-3">
      Confirm Password:
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div  >
    <button type="submit" class="btn btn-primary mt-2 d-block mx-auto">Submit</button>
    </div>

    <div class=" ">
    all ready have account ? <a href="index.php" class="text-danger">Login Here</a>
    </div>

  </form>

</section>
 

 
<section class="bg-primary" data-aos="center-center" data-aos-duration="1000" data-aos-onece = "true">
  <div>
    hi
    <p>sfs dfd</p>
    <p>sfs fdfa</p>
    <p>sfs fdfv </p>
  </div>
</section>

<section class="bg-danger " data-aos="slide-down" >
  <div>
    hi
    <p>sfs</p>
    <p>sfs</p>
    <p>sfssfsfas </p>
  </div>
</section>
<section class="bg-danger " data-aos="ease-in-back" >
  <div>
    hi
    <p>sfs</p>
    <p>sfs</p>
    <p>sfssfsfas </p>
  </div>
</section>
<section class="bg-danger " data-aos="ease-in-out" >
  <div>
    hi
    <p>sfs</p>
    <p>sfs</p>
    <p>sfssfsfas </p>
  </div>
</section>

    <?php
    echo " hi iam "
    ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init(
    {
      duration:3000,
      once :true,

    }
  )
  AOS.refresh();
</script>
</body>
</html>

 