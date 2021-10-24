<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Idefine Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="img/connecting_team.png" class="img-fluid" alt="...">
        </div>
        <div class="col">
          <div class="text-center mt-5">
            <form style="max-width: 70%; margin:auto;">
                <div class="mb-5">
                  <h1>Sign In</h1>
                </div>
                
                {{-- <label for="emailAddress" class="sr-only">Email Address</label> --}}
                <div class="mb-3">
                  <input type="email" id="emailAddress" class="form-control" placeholder="Email Address" required autofocus>
                </div>
                
                <input type="password" id="password" class="form-control" placeholder="Password" required>
                <div class="mt-5">
                  <div class="d-grid gap-2">
                    <button class="btn" style="background-color: #F9A826" type="button">Sign In</button>
                  </div>
                </div>
    
            </form>
        </div>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>