@extends('_layouts.master')

@section('content')
<section class="home">

</section>


			@forelse ($casestudies->sortByDesc('date') as $casestudy)

					<a href="{{ $casestudy->getPath() }}">
					<div class="home__casestudy home__casestudy-{{ str_slug($casestudy->title, '-') }}">
					<small>{{ date('M j, Y', $casestudy->date) }}</small><br>
					<strong>{{ $casestudy->title }}</strong><br>
					@if ($casestudy->image)
						<img src="{{ $casestudy->image }}">
					@endif
					{{-- @if($casestudy->tags)
					    @foreach ($casestudy->tags as $tag)
							<a href="/tags/{{ $tag }}">{{ $tag }}</a>
							{{ $loop->last ? '' : '-' }}
						@endforeach
					@else
						No Tags
					@endif --}}
					</div>
					</a>

			@empty
				<p>No case studies to show.</p>
			@endforelse

@endsection
