<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode {{ $product->code }}</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="container">
        {!! DNS1D::getBarcodeHTML($product->code, 'C128', 2, 100) !!}
    </div>
</body>

</html>
