@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div>
                <b-jumbotron header="{{ $series->title }}" lead="{{ \Str::words($series->description, 20) }}">
                  <p>{{ $series->created_at->diffForHUmans() }}</p>
                  <b-button variant="primary" href="#">Start Series</b-button>
                  <b-button variant="success" href="#">Subscribe</b-button>
                </b-jumbotron>
              </div>
        </section>

        <section class="mb-5">
            <h3 class="mb-3 text-center">Episodes</h3>
            <episode-component :videos="{{ $series->videos }}" ></episode-component>
        </section>

    </div>
@endsection
