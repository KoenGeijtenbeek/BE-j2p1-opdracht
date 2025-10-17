@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijn</title>
</head>
<body>
    <div class="container">

        <h1>{{ $data['title'] }}</h1>

        <table class='table'>
            <thead>
                <th>Product</th>
                <th>Verpakkings eenheid</th>
                <th>Aantal aanwezig</th>
            </thead>
            <tbody>
                @forelse ($data['magazijnen'] as $magazijn)
                    <tr>
                        <td>{{ $magazijn->ProductId }}</td>
                        <td>{{ $magazijn->VerpakkingsEenheid }}</td>
                        <td>{{ $magazijn->AantalAanwezig }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Geen allergenen gevonden</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>