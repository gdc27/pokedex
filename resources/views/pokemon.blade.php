@extends('layouts/app')

@section('content')
    <div class="poke_wrap">
        <div>
            <img class="pokemon-sprite" data-back="{{$pokemon->sprites->back_default}}" data-shiny="{{$pokemon->sprites->front_shiny}}" data-shiny-back="{{$pokemon->sprites->back_shiny}}" src="{{$pokemon->sprites->front_default}}" alt="{{$pokemon->name}}">
            <i class="fas fa-retweet rotate"></i>
            <i class="fas fa-star shiny"></i>
            <img src="{{ asset('/images/bg.png') }}" alt="Trainer sprite">
            <img src="{{ asset('/images/trainer.png') }}" alt="Trainer sprite">
        </div>
        <div>
            <div class="capacities">
                @php
                    $max =  count($pokemon->moves);
                @endphp
            @for ($i = 0; $i < 4; $i++)
                @php
                    $nb = rand(0,$max);
                    @endphp
                    <p>{{$pokemon->moves[$nb]->move->name}}</p>
                @endfor
            </div>
        </div>
    </div>
@endsection
