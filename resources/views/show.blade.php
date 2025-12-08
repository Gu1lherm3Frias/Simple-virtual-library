<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livro - {{$book->original_title}}</title>
</head>
<body>
    <div>
        <h3>{{$book->title}}</h3>
        <p>{{$book->isbn}}</p>
        <p>{{$book->authors}}</p>
    </div>
    <button>
        <a href="/{{$book->id}}/edit">Editar</a>
    </button>
    <form action="/{{ $book->id }}" method="POST">
        @csrf
        @method('delete')    
        <button type="submit" onclick="return confirm("CERTEZA QUE VAI ME DELETAR FI????");">Deletar</button>
    </form>

    <a href="/">voltar</a>
</body>
</html>