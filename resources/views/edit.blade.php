<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/{{$book->id}}" method="POST">
            @csrf
            @method('PUT')
            <p>Quantidade de livros:</p>
            <input type="text" name="books_count" value="{{$book->books_count}}">
            <p>Título:</p>
            <input type="text" name="title" value="{{$book->title}}">
            <p>Isbn:</p>
            <input type="text" name="isbn" value="{{$book->isbn}}">
            <p>Isbn13:</p>
            <input type="text" name="isbn13" value="{{$book->isbn13}}">
            <p>Autores:</p>
            <input type="text" name="authors" value="{{$book->authors}}">
            <p>Ano de publicação:</p>
            <input type="text" name="original_publication_year" value="{{$book->original_publication_year}}">
            <p>Idioma de origem:</p>
            <input type="text" name="language_code" value="{{$book->language_code}}">
            <p>URL da imagem:</p>
            <input type="text"  name="image_url" value="{{$book->image_url}}">
            <p>URL de imagem pequena:</p>
            <input type="text"  name="small_image_url" value="{{$book->small_image_url}}">
            <button type="submit">Salvar alteração</button>
        </form>
    </div>
</body>
</html>