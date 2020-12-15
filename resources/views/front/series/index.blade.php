@extends('layouts.app')

@section('content')
    <b-container>
        <section class="mb-5">
            <div>
                <b-row>
                    @foreach ($series as $item)
                        <b-col cols="3">
                            <b-card title="{{ $item->title }}" img-src="https://cdn.statically.io/img/austingil.com/wp-content/uploads/vue-blog-cover.svg" img-alt="Image" img-top class="mb-5">
                                <b-card-text>
                                {{ \Str::words($item->description, 10) }}
                                </b-card-text>
                                <template #footer>
                                    <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                <a href="{{ route('series.show', $item) }}" class="btn btn-success btn-sm float-right">Play</a>
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
    </b-container>
@endsection
