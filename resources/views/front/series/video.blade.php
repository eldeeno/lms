@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <h2>Video Player</h2>
            <video width="100%" height="400" controls>
                <source src="{{ asset('example.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <section class="mb-5 text-center">
            <a href="#" class="text-decoration-none" style="color:black;">
                <b-card  no-body class="overflow-hidden mb-2">
                    <b-row no-gutters>
                        <b-col>
                            <h3 class="pt-3"><strong>About this Episode</strong></h3>

                            <b-card-body title="{{ $video->title }}">
                                <b-card-text>
                                    {{ $video->description }}
                                </b-card-text>
                            </b-card-body>
                        </b-col>
                    </b-row>
                </b-card>
            </a>
        </section>

        <section class="mb-5">
            <h3 class="mb-3 text-center">Episodes</h3>
            <episode-component :videos="{{ $series->videos }}" ></episode-component>
        </section>

    </div>
@endsection
