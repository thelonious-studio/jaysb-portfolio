@extends('_layouts.master')

@section('title', $page->title)

@section('content')
<div class="casestudy">

	<div class="casestudy__body">
		@if ($page->image)
		<div class="casestudy__img">
			<img src="{{ $page->image }}">
		</div>
		@endif

		@foreach ($page->tags as $tag)
			<a href="/tags/{{ $tag }}">{{ $tag }}</a>
			{{ $loop->last ? '' : '-' }}
		@endforeach
		<div class="casestudy__text">
			<div class="casestudy__header">
				<h1>{{ $page->title }}</h1>
				<hr>
				<h3>{{ $page->type }}</h3>
			</div>
			<p>@yield('csContent')</p>

			<p>{!! $page->writeup !!}</p>
			<a href="/"><h3>Back</h3></a>
		</div>

	</div>

    {{-- @include('_partials.share') --}}
</div>
@endsection
