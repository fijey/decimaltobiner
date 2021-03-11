<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Convert Decimal to Biner</h1>

    <form action="/convert" method="POST">
        @csrf
        <label for="">Masukan Angka yang kamu inginkan</label>
        <div>
            <input type="text" class="form-control" name="number" id="">
        </div>
        <input type="submit">
    </form>

    @if($data != null)
        <p class="result">hasil Convert = {{$data}}</p>
    @endif
    
</body>
</html>