<html>
<head>
</head>
<body>
    <p>This is user's ID {{ $cart->userId }}</p>
    <p>This is price {{ $cart->price }}</p>
@foreach($cart->cartItems as $cartItem)
    <p>This is price cart item {{ $cartItem->price }}</p>
@endforeach
</body>
</html>
