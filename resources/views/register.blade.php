<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Simple Apps</title>
    <style>
        body{
            background-position: center;
            background-repeat: no-repeat;
            background-color: #311D3F; 
            margin-top: 10%;
        }
        .button-29 {
            align-items: center;
            appearance: none;
            background-color:#E23E57;
            border: 0;
            border-radius: 6px;
            box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono",monospace;
            height: 48px;
            width: 100%;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px;
        }

        .button-29:hover {
            background-color:#311D3F;
            color:#FFF;
        }

    </style>
  </head>
  <body>
  <form action="http://localhost:8000/api/register" method="POST" class="form-signin">
    <div class="card mx-auto" style="width: 50rem;">
        <div class="card-body">
            <h5 class="mb-3 font-weight-normal" style="text-align:center;">Daftar</h5>
                <div class="form-group">
                    Sudah Memiliki Akun? <a href="/">Masuk</a>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail" class="sr-only">Nickname</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                    </div>
                    <div class="col">
                        <label for="inputEmail" class="sr-only">Fullname</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail" class="sr-only">Nickname</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                    </div>
                    <div class="col">
                        <label for="inputEmail" class="sr-only">Fullname</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email Anda</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukan Email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="typePassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="typePassword" class="form-control" placeholder="Masukan Password" required>
                </div>
                <hr>
                <div class="form-group">
                    <button class="button-29" type="submit">Daftar</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>