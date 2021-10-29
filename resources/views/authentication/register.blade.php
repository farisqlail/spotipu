<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>


<style>
    body{
        background-image: url('/assets/img/bglogin.png');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        
    }
    .card{
        width: 580px;
        height: 580px;
        margin: auto;
        margin-top: 150px;
        border-radius: 30%;
    }
    .formlogin{
        margin: auto;
    }

    .input{
        border-top: none;
        border-left: none;
        border-right: none;
        background: none;
        border: #ffffff;
    }
    img{
        width: 200px;
        height: 200px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

    <div class="container" >
        
        <div class="card" style="background-color: #00856B">
            <img src="assets/img/logo-2.png" alt="">
            <form class="formlogin">
                <div class="mb-1">
                  <input type="email" placeholder="Masukan Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <input type="email" placeholder="Masukan Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-4">
                  <input type="password" placeholder="Masukan Password" class="form-control mt-2" id="exampleInputPassword1">
                </div>
                <div class="mb-1">
                    <input type="number" placeholder="Masukan nomer handphone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">Login</button><br>
                <button class="btn btn-rounded mt-2" style="background-color: #48536C; font-color: #ffffff;">Register</button>
              </form>
            
        </div>
    </div>
    
</body>
</html>