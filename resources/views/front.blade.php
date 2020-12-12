@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div>
                <b-jumbotron header="BootstrapVue" lead="Bootstrap v4 Components for Vue.js 2">
                  <p>For more information visit website</p>
                  <b-button variant="primary" href="{{ route('series.index') }}">Browse Courses</b-button>
                </b-jumbotron>
              </div>
        </section>

        <section class="mb-5">
            <div>
                <b-row>
                    @foreach ($featuredSeries as $fs)
                        <b-col cols="4">
                            <b-card title="{{ $fs->title }}" img-src="https://cdn.statically.io/img/austingil.com/wp-content/uploads/vue-blog-cover.svg" img-alt="Image" img-top>
                                <b-card-text>
                                {{ \Str::words($fs->description, 10) }}
                                </b-card-text>
                                <template #footer>
                                <small class="text-muted">{{ $fs->created_at->diffForHUmans() }}</small>
                                </template>
                            </b-card>
                        </b-col>
                    @endforeach
                </b-row>
            </div>
        </section>

        <section>
            <pricing-component></pricing-component>
        </section>
    </div>
@endsection
