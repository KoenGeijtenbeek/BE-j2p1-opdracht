@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergeen</title>
</head>
<body>
    <div class = "container">
        <h1>{{ $data['title'] }}</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" aria-label="sluiten" data-bs-dismiss="alert"></button>
            </div>
            <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
            </div>
            <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
        @endif

        <a href="{{ route('allergeen.create') }}" class="btn btn-primary my-3">Nieuwe allergeen</a>

        <table class='table'>
            <thead>
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Verwijder</th>
                <th>Wijzig</th>
            </thead>
            <tbody>
                @forelse ($data['allergenen'] as $allergeen)
                    <tr>
                        <td>{{ $allergeen->Naam }}</td>
                        <td>{{ $allergeen->Omschrijving }}</td>
                        <td>
                            <form action="{{ route('allergeen.destroy', $allergeen->Id) }}" method="POST"
                                onsubmit="return confirm('Weet je het zeker');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Verwijder</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('allergeen.edit', $allergeen->Id) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-success">Wijzig</button>
                            </form>
                        </td>
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