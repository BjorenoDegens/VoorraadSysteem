@extends('layouts.app')

@section('content')
    <h1>Uitleenwagen</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(empty($cart) || count($cart) === 0)
        <p>De uitleenwagen is leeg.</p>
    @else
        <ul>
            @foreach($cart as $id => $item)
                @if(!is_null($item['name']))
                    <li>
                        {{ $item['name'] }} - Aantal: {{ $item['quantity'] }} - Retourdatum: {{ $item['return_date'] }}
                    </li>
                @else
                    <li>
                        <em>Product niet gevonden (mogelijk verwijderd).</em>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
@endsection
