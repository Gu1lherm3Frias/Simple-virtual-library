<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca virtual - FFLCH</title>
</head>
<body>
    <div>
        <form action="/book" method="POST">
            @csrf
            <p>Título:</p>
            <input type="text">
            <p>Título original:</p>
            <input type="text">
            <p>Isbn:</p>
            <input type="text">
            <p>Isbn13:</p>
            <input type="text">
            <p>Autor:</p>
            <input type="text">
            <p>Ano de publicação:</p>
            <input type="text">
            <p>Idioma de origem:</p>
            <input type="text">
            <p>Avaliação média:</p>
            <input type="text">
            <p>Total de avaliações:</p>
            <input type="text">
            <p>Total de avaliações técnicas:</p>
            <input type="text">
            <p>Total de revisões técnicas:</p>
            <input type="text">
            <p>URL da imagem:</p>
            <input type="text">
            <p>URL de imagem pequena:</p>
            <input type="text">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>