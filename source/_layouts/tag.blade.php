@extends('_layouts.master')

@section('title', "Posts tagged '{$page->name()}'")

@section('content')
    <h1>Case studies tagged '{{ $page->name() }}'</h1>

    <ul>
        @forelse (posts_filter($casestudies, $page) as $casestudy)
            <li>
                <a href="{{ $casestudy->getPath() }}">{{ $casestudy->title }}</a>
                <small>{{ date('M j, Y', $casestudy->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
