<x-app-layout>

<h2 class="titulo">Mis Robots</h2>


    <div class="container">



        @foreach(['supra'] as $robot)

        @php
        $inactive = Auth::user()->$robot === 'inactivo';
        $name = ($robot === 'serenus') ? 'SERENUS' : (($robot === 'aureum') ? 'AUREUM' : 'SUPRA');
        $price = ($robot === 'serenus') ? 'US$89' : (($robot === 'aureum') ? 'US$129' : 'US$179');
        $accessRoute = "robot.$robot";
        $accessText = "Ya tienes acceso al BOT " . ucfirst($robot);
        @endphp


        <div class="card" style="--clr: #F9218D">
            <div class="img-box">
             <img src="{{ asset('img/forexjaponesicono.png') }}" alt="Ejemplo">
            </div>
            <div class="content">

                @if ($inactive)

                <h2>{{ $name }}</h2>
                <p class="text-lg text-center">No tienes acceso a este Robot</p>
                <a href="{{ route('home.trading-ai') }}#prices">Adquirir</a>

                @else
                <h2>{{ $name }}</h2>

            
                <p class="text-lg text-center">{{ $accessText }}</p>

                <a href="{{ route($accessRoute) }}" class="text-lg text-center text-green-700 hover:underline">Ver Robot</a>

                @endif
            </div>
        </div>
        @endforeach

    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        .titulo{

            font-size: 2.5rem;
            font-weight: 700;
            color: #4E4D4D;
            text-align: center;
            margin-top: 60px;

        }

.container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 100px 50px;
    padding: 100px 50px;
}

.container .card {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 350px;
    max-width: 100%;
    height: 300px;
    background: white;
    border-radius: 20px;
    transition: 0.5s;
    box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
}

.container .card:hover {
    height: 300px;
}

.container .card .img-box {
    position: absolute;
    top: 20px;
    width: 300px;
    height: 220px;
    background: transparent;
    border-radius: 12px;
    overflow: hidden;
    transition: 0.5s;
}

.container .card:hover .img-box {
    top: -100px;
    scale: 0.75;
}

.container .card .img-box img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container .card .content {
    position: absolute;
    top: 252px;
    width: 100%;
    height: 35px;
    padding: 0 30px;
    text-align: center;
    overflow: hidden;
    transition: 0.5s;
}

.container .card:hover .content {
    top: 130px;
    height: 250px;
}

.container .card .content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--clr);
}

.container .card .content p {
    color: #333;
}

.container .card .content a {
    position: relative;
    top: 15px;
    display: inline-block;
    padding: 12px 25px;
    text-decoration: none;
    background: var(--clr);
    color: white;
    font-weight: 500;
}

.container .card .content a:hover {
    opacity: 0.8;
}

@media (max-width: 480px) {
    .container .card {
        width: 230px;
        border-radius: 15px;
    }

    .container .card .img-box {
        width: 185px;
        border-radius: 10px;
    }

    .container .card .content p {
        font-size: 0.8rem;
    }

    .container .card .content a {
        font-size: 0.9rem;
    }
}
    </style>
</x-app-layout>