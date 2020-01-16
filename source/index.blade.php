@extends('_layouts.master')

@section('content')
<h1>Home</h1>
		<div class="row around-xs">
			@forelse ($casestudies->sortByDesc('date') as $casestudy)
				<div class="col-xs-12">
					<a href="{{ $casestudy->getPath() }}">
					<div class="home__casestudy home__casestudy-{{ str_slug($casestudy->title, '-') }}">
					<small>{{ date('M j, Y', $casestudy->date) }}</small><br>
					<strong>{{ $casestudy->title }}</strong><br>
					@if($casestudy->tags)
					    @foreach ($casestudy->tags as $tag)
							<a href="/tags/{{ $tag }}">{{ $tag }}</a>
							{{ $loop->last ? '' : '-' }}
						@endforeach
					@else
						No Tags
					@endif
					</div>
					</a>
				</div>
			@empty
				<p>No case studies to show.</p>
			@endforelse
		</div>
@endsection
