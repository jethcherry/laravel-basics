<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $product->title ?? 'No Title Available' }} ({{ $product->id ?? 'N/A' }})</h1>

    {{-- {!!$subtitle!!}--}}
    <p>{{ $product->description ?? 'No Description Available' }}</p>
    <p>{{ $product->price ?? 'No price Available' }}</p>
    <p>{{ $product->stock ?? 'No Description Available' }}</p>
    <p>{{ $product->status ?? 'No Description Available' }}</p>

</body>
</html>
