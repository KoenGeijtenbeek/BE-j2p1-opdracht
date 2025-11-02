@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">

        <h1>Allergeen Overzicht</h1>

        <h3>Naam: {{ $data[0]->ProductNaam ?? '' }}</h3>
        <h3>Barcode: {{ $data[0]->Barcode ?? '' }}</h3>

        <table class='table'>
            <thead>
                <th>Naam</th>
                <th>Omschrijving</th>
            </thead>
            <tbody>
                @forelse ($data as $allergeen)
                    <tr>
                        <td>{{ $allergeen->AllergeenNaam }}</td>
                        <td>{{ $allergeen->Omschrijving }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>