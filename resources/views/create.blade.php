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
            <p>Boas Leituras ID:</p>
            <input type="text" name="goodreads_book_id">
            <p>Melhores Livros ID:</p>
            <input type="text" name="best_book_id">
            <p>ID trabalho:</p>
            <input type="text" name="work_id">
            <p>Título:</p>
            <input type="text" name="title">
            <p>Título original:</p>
            <input type="text" name="original_title">
            <p>Isbn:</p>
            <input type="text" name="isbn">
            <p>Isbn13:</p>
            <input type="text" name="isbn13">
            <p>Autores:</p>
            <input type="text" name="authors">
            <p>Ano de publicação:</p>
            <input type="text" name="original_publication_year">
            <p>Idioma de origem:</p>
            <input type="text" name="language_code">
            <p>Avaliação média:</p>
            <input type="text" name="average_rating">
            <p>Total de avaliações:</p>
            <input type="text" name="ratings_count">
            <p>Total de avaliações técnicas:</p>
            <input type="text" name="work_ratings_count">
            <p>Total de revisões técnicas:</p>
            <input type="text" name="work_text_reviews_count">
            <p>Avaliações 1:</p>
            <input type="text" name="ratings_1">
            <p>Avaliações 2:</p>
            <input type="text" name="ratings_2">
            <p>Avaliações 3:</p>
            <input type="text"  name="ratings_3">
            <p>Avaliações 4:</p>
            <input type="text"  name="ratings_4">
            <p>Avaliações 5:</p>
            <input type="text"  name="ratings_5">
            <p>URL da imagem:</p>
            <input type="text"  name="image_url">
            <p>URL de imagem pequena:</p>
            <input type="text"  name="small_image_url">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>