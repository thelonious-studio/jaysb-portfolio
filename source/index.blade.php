@extends('_layouts.master')

@section('content')
    <ul>
        @forelse ($casestudies->sortBy('title') as $casestudy)
            <li>
                <a href="{{ $casestudy->getPath() }}">{{ $casestudy->title }}</a>
                <small>{{ date('M j, Y', $casestudy->date) }}</small>
            </li>
        @empty
            <p>No case studies to show.</p>
        @endforelse
    </ul>
@endsection
