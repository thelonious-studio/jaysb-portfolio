@extends('_layouts.master')

@section('content')
<section class="home">
	@forelse ($casestudies->sortByDesc('date') as $casestudy)
	<a href="{{ $casestudy->getPath() }}">
		<div class="home__casestudy">
			<div class="home__csimg" style="background-image: url('{{ $casestudy->image }}')">

			</div>
			<div class="home__csheader">
				<h2>{{ $casestudy->title }}</h2>
				<hr>
				<h4>{{ $casestudy->type }}</h4>

			</div>
			@if ($casestudy->image)
				<img src="">
			@endif
		</div>
	</a>
		{{-- <small>{{ date('M j, Y', $casestudy->date) }}</small> --}}
		{{-- @if($casestudy->tags)
			@foreach ($casestudy->tags as $tag)
				<a href="/tags/{{ $tag }}">{{ $tag }}</a>
				{{ $loop->last ? '' : '-' }}
			@endforeach
		@else
			No Tags
		@endif --}}
	@empty
		<p>No case studies.</p>
	@endforelse
</section>
@endsection
