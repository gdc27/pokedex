@extends('layouts/app')

@section('content')
            <section class="search">
                <h2>Search a pokémon</h2>
                <div class="input_box">
                    <input type="text" name="input-search" placeholder="Search for a pokemon...">
                    <i class="fas fa-search"></i>
                </div>
            </section>
            <section>
                <h2>All Pokémons</h2>
                <div class="pokemons">
                    @foreach ($pokemons as $pokemon)
                        <div class="pokemon" data-id="{{$pokemon->id}}">
                            <img src="{{ $pokemon->sprites->front_default }}" alt="{{ $pokemon->name }}">
                            <p>N°{{$pokemon->id}} : {{ $pokemon->name }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="navigation">
                    <i class="fas fa-chevron-left prev"></i>
                    <p class="page_nb">{{$id}}</p>
                    <i class="fas fa-chevron-right next"></i>
                </div>
            </section>
@endsection
