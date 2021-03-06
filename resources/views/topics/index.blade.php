@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-8">
            @foreach($topics as $topic)
                <div class="mt-5">
                    <div class="card">
                        <div class="card-header">
                            Sent by {{ $topic->user->name }} in {{ $topic->created_at->diffForHumans() }}
                        </div>
                        <div class="card-body">
                            <article>
                                <a href="{{ route('topic.show', $topic->id) }}">
                                    <h6> {{ $topic->title }} </h6>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
