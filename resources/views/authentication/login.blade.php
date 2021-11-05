<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<link rel="stylesheet" href="assets/css/style2.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

    <div class="container" >
        
        <div class="card " style="background-color: #00856B; border-radius: 25%">
            <img src="assets/img/logo-2.png" alt="">
            <form action="/register" align="center" >
                
                <div align="center" class="formcon">

                    {{-- TextField Email --}}
                    <div class="form-group mb-1">
                        <label class="labelemail" for="">Email</label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="email"  class="form-control" id="">
                      </div>
                      

                      {{-- TextField Password --}}
                      <div class="form-group mb-4" style="margin-top: 40px">
                        <Label class="labelpass">Password</Label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="password" placeholder="Masukan Password" class="form-control mt-2" id="exampleInputPassword1">
                      </div>
      
                      <div class="buttoncon">
                        <a href="{{ url('/') }}" style="width: 60%;" type="submit" class="btn btn-primary mt-3">Login</a><br>
                        
                      </div>
                      <form action="/register">
                        <input type="hidden" value="empty">
                        <a href="{{ url('/register') }}" class="btn btn-rounded btn btn-dark mt-2" style="background-color: #2c3e50; width: 60%; border: none">Register</a>
                    </form>
                </div>

            </form>
            
        </div>
    </div>
    
</body>
</html>