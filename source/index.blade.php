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
					@if($casestudy->tags >= '1')
					{{ $casestudy->tags }}
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
