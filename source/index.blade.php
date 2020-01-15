@extends('_layouts.master')

@section('content')
<h1>Home</h1>
		<div class="row">
			@forelse ($casestudies->sortBy('title') as $casestudy)
				<div class="col-xs-10 col-sm-6">
					<a href="{{ $casestudy->getPath() }}">
					<div class="home__casestudy home__casestudy-{{ $casestudy->title }}">
					<small>{{ date('M j, Y', $casestudy->date) }}</small><br>
					{{ $casestudy->title }}
					</div>
					</a>
				</div>
			@empty
				<p>No case studies to show.</p>
			@endforelse
		</div>
@endsection
