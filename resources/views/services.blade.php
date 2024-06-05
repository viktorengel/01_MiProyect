@extends('layouts.landing')

@section('title')
    Services
@endsection

@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'service 1')
        @slot('content')
            <h3>Ejemplo 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate exercitationem dolore voluptatibus magni vero expedita unde qui ipsum commodi consequuntur tempore ea natus numquam at, quasi nobis eveniet quae debitis?</p>
        @endslot
    @endcomponent

    @component('_components.card')
        @slot('title', 'service 2')
        @slot('content')
            <h3>Ejemplo 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate exercitationem dolore voluptatibus magni vero expedita unde qui ipsum commodi consequuntur tempore ea natus numquam at, quasi nobis eveniet quae debitis?</p>
        @endslot
    @endcomponent
@endsection