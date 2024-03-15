<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @foreach (range(1, 10) as $i)
            @if ($loop->first)
                <p>
                    Primeiro indice = {{ $loop->index }}
                </p>
            @endif

            <p>
                Loop atual = {{ $loop->iteration }}
            </p>
            <p>
                Interações restantes - {{ $loop->remaining }}
            </p>
            <p>
                Numero totol de interações - {{ $loop->count }}
            </p>

            <p>
                Nivel de aninhamento do loop atual - {{ $loop->depth }}
            </p>

            @if ($loop->even)
                <p>
                    Se esta é uma iteração uniforme através do loop.
                </p>
            @endif

            @if ($loop->odd)
                <p>
                    Se esta é uma iteração estranha através do loop.
                </p>
            @endif

            @if ($loop->last)
                <p>
                    Ultima interação!
                </p>
            @endif
        @endforeach

        <x-alert>
            <x-slot:title>
                Server Error
            </x-slot>

            <strong>Whoops!</strong> Something went wrong!
        </x-alert>
    </body>
</html>
