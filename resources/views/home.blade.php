<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
         <div class="container"> 
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
         </div>
    </nav>
    <div class="container" style="margin-top: 150px"> 
        <div class="row"> <div class="col-12 text-center"> 
            <h1 class="text-secondary">Selamat Datang!</h1>
             <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4> 
             <h6 class="mt-3"> Silahkan <a href="{{ route('auth.login') }}" style="text-decoration: none">Masuk</a> 
                atau <a href="{{ route('auth.register') }}" style="text-decoration: none">Daftar</a> Jika Anda belum punya akun </h6>
        </div>
    </div>
</body>
</html>