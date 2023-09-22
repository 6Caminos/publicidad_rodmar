<html>
<head>

    <link rel="stylesheet" href="{{asset ('css/carrousel.css')}}">
    <script type="text/javascript" src="js/courer.js"></script>
 </head>

@extends('pilar')

@section('contenido')
<div class="cards">
    
    @php
    include(resource_path('views/cards/cardsData.php'));
    @endphp

    @foreach ($cardsEsquineros as $i => $item)
        @include('modals.card-modal')
    @endforeach
</div>
@endsection
    </body>
</html>
