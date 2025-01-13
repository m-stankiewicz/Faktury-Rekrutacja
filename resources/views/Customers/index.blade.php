<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista klientów</title>
</head>
<body>
    <h1>Lista klientów</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa firmy</th>
                <th>Email</th>
                <th>Adres</th>
                <th>Miasto</th>
                <th>Kraj</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->country }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Brak klientów w bazie.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
