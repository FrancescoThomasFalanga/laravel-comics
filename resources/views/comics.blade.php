@extends('layouts/mainLayout')

@section('content')

<div class="bg-grey">

    <div class="container">

        <div class="row comic-card">

            @foreach ($comics as $comic)

            <div class="col-2 comic-inner">

                <a href="{{ route('Action Comics') }}?index={{ $loop->index }}">

                    <img src="{{ $comic['thumb'] }}" alt="IMG">

                </a>

                {{ $comic['series'] }}

            </div>

            @endforeach

        </div>

    </div>


    <div class="container more-content">

        <button>
            LOAD MORE
        </button>

    </div>

</div>

@endsection