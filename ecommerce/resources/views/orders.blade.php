<!-- resources/views/orders.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
</head>
<body>
    <h1>Customer Orders</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order['id'] }}</td>
                <td>{{ $order['customer_name'] }}</td>
                <td>${{ number_format($order['total'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
