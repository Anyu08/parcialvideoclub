<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Películas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .movie-container {
            width: 60%;
            margin: 40px auto;
        }

        .movie-card {
            display: flex;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .movie-poster img {
            width: 200px;
            border-radius: 10px;
        }

        .movie-details {
            flex: 1;
            padding-left: 20px;
        }

        .movie-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .movie-details p {
            margin: 5px 0;
            color: #333;
        }

        .movie-details p strong {
            color: #000;
        }

        .movie-actions {
            margin-top: 20px;
        }

        .movie-actions button, .movie-actions a {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none; /* Asegura que el enlace no tenga subrayado */
            display: inline-block; /* Para que se vea como un botón */
        }

        .movie-actions .edit-btn {
            background-color: #f39c12;
        }

        .movie-actions .back-btn {
            background-color: #95a5a6;
        }

        .movie-actions button:hover, .movie-actions a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="movie-container">
        <!-- Película 1: Coraline y la puerta secreta -->
        <div class="movie-card">
            <div class="movie-poster">
                <img src="https://i.pinimg.com/474x/c7/f7/84/c7f78488d750ad1adac29ffac472be5d.jpg" alt="Poster de Coraline y la puerta secreta">
            </div>
            <div class="movie-details">
                <h2>Coraline y la puerta secreta</h2>
                <p><strong>Año:</strong> 2009</p>
                <p><strong>Director:</strong> Henry Selick</p>
                <p><strong>Resumen:</strong> Coraline descubre una puerta secreta en su nuevo hogar que la lleva a un mundo alterno donde todo parece perfecto, pero esconde un oscuro secreto...</p>
                <p><strong>Estado:</strong> Película actualmente disponible.</p>
                <div class="movie-actions">
                    <button class="return-btn">Devolver película</button>
                    <a href="{{ route('editar', ['id' => 1]) }}" class="edit-btn">Editar película</a>
                    <button class="back-btn">Volver al listado</button>
                </div>
            </div>
        </div>

        <!-- Película 2: Cenicienta -->
        <div class="movie-card">
            <div class="movie-poster">
                <img src="https://image.tmdb.org/t/p/original/7tVLRdfbkFqunopykQq2BoBGIiY.jpg" alt="Poster de Cenicienta">
            </div>
            <div class="movie-details">
                <h2>Cenicienta</h2>
                <p><strong>Año:</strong> 1950</p>
                <p><strong>Director:</strong> Clyde Geronimi, Hamilton Luske</p>
                <p><strong>Resumen:</strong> La joven Cenicienta vive una vida de servidumbre con su malvada madrastra y hermanastras, pero su vida cambia con la ayuda de su hada madrina y un príncipe encantador.</p>
                <p><strong>Estado:</strong> Película actualmente disponible.</p>
                <div class="movie-actions">
                    <button class="return-btn">Devolver película</button>
                    <a href="{{ route('editar', ['id' => 2]) }}" class="edit-btn">Editar película</a>
                    <button class="back-btn">Volver al listado</button>
                </div>
            </div>
        </div>

        <!-- Película 3: La princesa y el sapo -->
        <div class="movie-card">
            <div class="movie-poster">
                <img src="https://i.pinimg.com/736x/b0/dd/0f/b0dd0fc275ce2d0c67f01474bec15aff.jpg" alt="Poster de La princesa y el sapo">
            </div>
            <div class="movie-details">
                <h2>La princesa y el sapo</h2>
                <p><strong>Año:</strong> 2009</p>
                <p><strong>Director:</strong> Ron Clements, John Musker</p>
                <p><strong>Resumen:</strong> Tiana, una joven de Nueva Orleans, sueña con abrir su propio restaurante. Todo cambia cuando conoce a un príncipe convertido en sapo por un hechizo.</p>
                <p><strong>Estado:</strong> Película actualmente alquilada.</p>
                <div class="movie-actions">
                    <button class="return-btn">Devolver película</button>
                    <a href="{{ route('editar', ['id' => 3]) }}" class="edit-btn">Editar película</a>
                    <button class="back-btn">Volver al listado</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>