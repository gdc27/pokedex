@extends('layouts/app')

@section('content')
    <a href="@php echo route('poke.home');@endphp"><i class="fas fa-long-arrow-alt-left home-button"></i></a>
    <div class="poke_wrap">
        <div>
            <img class="pokemon-sprite" data-front="{{$pokemon->sprites->front_default}}"
                 data-back="{{$pokemon->sprites->back_default}}" data-shiny-front="{{$pokemon->sprites->front_shiny}}"
                 data-shiny-back="{{$pokemon->sprites->back_shiny}}" data-shiny-state="no" data-view="front"
                 src="{{$pokemon->sprites->front_default}}" alt="{{$pokemon->name}}">
            <i class="fas fa-retweet rotate"></i>
            <i class="fas fa-star shiny"></i>
            <img src="{{ asset('/images/bg.png') }}" alt="Trainer sprite">
            <img src="{{ asset('/images/trainer.png') }}" alt="Trainer sprite">
        </div>
        <div>
            <div class="capacities_wrap">
                <h2> Attacks </h2>
                <div class="capacities">
                    @php
                        $max =  count($pokemon->moves);
                        if($max < 4 ){
                            $limit = $max;
                        }else{
                            $limit = 4;
                        }
                    @endphp
                    @for ($i = 0; $i < $limit; $i++)
                        @php
                            if($max < 4){
                                $nb = $i ;
                            }else{
                                $nb = rand(0,$max);
                            }
                        @endphp
                        <p>{{$pokemon->moves[$nb]->move->name}}</p>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
