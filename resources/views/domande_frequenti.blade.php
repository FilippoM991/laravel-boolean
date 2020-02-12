@extends('layouts.main')

@section('content')

    <div class="titoloFq container">
        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 primaCorso">
                <h2>Prima del corso</h2>


                @foreach ($lista_faq_sx as $faq)
                    <div class="faq">
                        <h4>{{$faq['q']}}</h4>
                        <i class="fas fa-plus"></i>
                        <p>{{$faq['a']}}</p>
                    </div>
                @endforeach

            </div>
            <div class="col-xl-6 dopoCorso">
                <h2>Dopo il corso</h2>
                @foreach ($lista_faq_dx as $faq)
                    <div class="faq">
                        <h4>{{$faq['q']}}</h4>
                        <i class="fas fa-plus"></i>
                        <p>{{$faq['a']}}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
