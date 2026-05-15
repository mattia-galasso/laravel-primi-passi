<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi Passi</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>👋🏻</text></svg>">
</head>

<body>
    <header>
        <h1>👋🏻 Hello World! 👋🏻</h1>
        <h2>{{$welcome}}</h2>
    </header>
    <main>
        <h2>Altre pagine:</h2>
        <div>
            <ul>
                <li><a href="{{ url('products') }}">Prodotti → 1️⃣</a></li>
                <li><a href="{{ url('contacts') }}">Contatti → 2️⃣</a></li>
                <li><a href="{{ url('aboutus') }}">Crediti → 3️⃣</a></li>
            </ul>
        </div>
    </main>
</body>

</html>