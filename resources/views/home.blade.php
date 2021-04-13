<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- SECTION 1 --}}
    <section>
        <div>
            <h1>Tous les membres : {{$dataMembres->count()}}</h1>
            <div class="row">
                @foreach ($dataMembres as $nomMembre)
                    <div class="col-2 {{$nomMembre->genre == 'Homme'? 'text-primary':'text-danger'}}" >
                        {{ $nomMembre -> nom }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- SECTION 2 --}}
    <section>
        <div>
            <h1>Les hommes : {{$membresHommes->count()}}</h1>
        </div>
        <div class="row">
            @foreach ($membresHommes as $membreHommeNom)
                <div class="col-2">
                    {{$membreHommeNom -> nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION 3 --}}
    <section>
        <div>
            <h1>Les femmes : {{$membresFemmes->count()}}</h1>
        </div>
        <div class="row">
            @foreach ($membresFemmes as $membreFemmeNom)
                <div class="col-6">
                    {{$membreFemmeNom -> nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION 4 --}}
    <section>
        <div>
            <h1>Les hommes entre 18 et 24 ans : {{$hommesAge->count()}}</h1>
        </div>
        <div class="row">
            @foreach ($hommesAge as $hommeAge)
                <div class="col-2">
                    {{$hommeAge -> nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION 5 --}}
    <section>
        <div>
            <h1>Les femmes entre 18 et 24 ans : {{$femmesAge->count()}}</h1>
        </div>
        <div class="row">
            @foreach ($femmesAge as $femmeAge)
                <div class="col-6">
                    {{$femmeAge -> nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION 6 --}}
    <section>
        <div>
            <h1>Les personnes hors conditions : {{$horsConditions->count()}}</h1>
        </div>
        <div class="row">
            @foreach ($horsConditions as $horsCond)
                <div class='col-2'>
                    {{$horsCond->nom}}
                </div>
            @endforeach
        </div>
    </section>
    <script src="{{asset('js/app.js')}}"><script>
</body>
</html>