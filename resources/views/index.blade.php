<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca virtual - FFLCH</title>
</head>
<body>
    <header>
        <h1>Biblioteca virtual da FFLCH</h1>
    </header>
    <div>
        <span>
            <button><a href="\create">Adicione novo livro</a></button>
        </span>
        @foreach ($books as $book)
            <li>Nº ISBN:{{ $book->isbn }}, Título: {{$book->title}}</li>
        @endforeach
    </div>
</body>
</html>/