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
        
        <div class="card" style="background-color: #00856B; border-radius: 25%">
            <img src="assets/img/logo-2.png" alt="">
            <form align="center" >
                
                <div align="center" class="formcon2">

                    {{-- TextField UserName --}}
                    <div class="form-group mb-1">
                        <label class="labeluser" for="">Username</label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="text"  class="form-control" id="">
                      </div>
                    {{-- TextField Email --}}
                    <div class="form-group mb-1">
                        <label class="labelemail" for="">Email</label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="email"  class="form-control" id="">
                      </div>
                      

                      {{-- TextField Password --}}
                      <div class="form-group mt-1" style="margin-top: 10px">
                        <Label class="labelpass">Password</Label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="password" class="form-control mt-2" id="exampleInputPassword1">
                      </div>

                      {{-- TextField NomerHp --}}
                      <div class="form-group mt-1" style="margin-top: 10px">
                        <Label class="labelhp">No_Hp</Label>
                        <input style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="number" class="form-control mt-2" id="exampleInputPassword1">
                      </div>
      
                      <div class="buttoncon">
                        <button style="width: 60%; background-color: #009BA0; border: none" type="submit" class="btn btn-dark mt-1 mb-3">Register</button><br>
                        <a class="aref" href="/login">Kembali ke halaman login</a>
                      </div>
                </div>

            </form>
            
        </div>
    </div>
    
</body>
</html>


