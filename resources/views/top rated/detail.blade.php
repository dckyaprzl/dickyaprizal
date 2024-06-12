<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .image-container {
            flex: 0 0 430px;
            margin-right: 50px;
        }
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .details-container {
            flex: 1;
        }
        .details-container h1 {
            font-weight: bold;
        }
        .details-container h3 {
            font-weight: bold;
        }
        .details-container h4, .details-container h5, .details-container p {
            margin: 5px 0;
            color: #fff;
        }
        .btn-container {
            margin: 20px 0;
        }
        .video-container iframe {
            width: 100%;
            height: 315px; /* Atur tinggi iframe sesuai kebutuhan */
            border-radius: 4px;
            margin-top: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="btn-container">
            <a href="/toprated" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="row">
            <div class="col-md-4 image-container">
                <img src="{{ url('/data_file/'.$film->thumbnail) }}" alt="Thumbnail">
            </div>
            <div class="col-md-8 details-container">
                <h1>{{ $film->Judul_Film }}</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Kode Film: {{ $film->Kode_Film }}</h5>
                        <h5>Tahun Rilis: {{ $film->Tahun_Rilis }}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>Genre: {{ $film->Genre }}</h5>
                        <h5>Rating: {{ $film->Rating }}</h5>
                    </div>
                </div>
                <h3>Overview:</h3> <h6>{{ $film->deskripsi }}</h6>
                <div class="video-container">
                    <iframe src="{{ $film->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
