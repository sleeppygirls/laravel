<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Coba {{ $nama }} {{-- memanggil variabel nama --}}</title>
</head>
<body>
    {{-- memanggil varibel yang ada html --}}
    {!! $kelass !!}

    {{-- membuat if --}}
    @if ($lampu ==1)
        <h2>Lampu Nyala</h2>
    @else
        <h2>Lampu Mati</h2>
    @endif

    {{-- membuat switch --}}
    @switch($nilai)
        @case('A')
            <h2>Memuaskan</h2>
        @break

        @case('B')
            <h2>Baik</h2>
        @break

        @case('C')
            <h2>Cukup</h2>
        @break

        @default
            <h2>Kurang</h2>
    @endswitch

    {{-- membuat perulangan dengan for --}}
    <ul>
        @for ($i =1; $i <= $for; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

    {{-- membuat foreach --}}
    <ul>
        @foreach ($hobbi as $hobi)
            <li>{{ $hobi }}</li>
        @endforeach
    </ul>

    {{-- membuat forelse (kalau misal ada data kosong dia boleh) --}}
    <ul>
        @forelse ($hobbi as $hobi)
            <li>{{ $hobi }}</li>
        @empty
            Data kosong  {{-- misal data kosong jadi ini outputnya--}}
        @endforelse
    </ul>
</body>
</html>