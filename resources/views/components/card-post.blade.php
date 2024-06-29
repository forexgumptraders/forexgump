@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
@if($post->images->count() > 0)
    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->images->first()->url) }}" alt="">
@else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/09/05/03/47/trading-4453011_960_720.jpg" alt="">
@endif


				<div class="px-6 py-4">
						<h1 class="font-bold text-xl mb-2">
							<a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
						</h1>

						<div class="text-gray-700 text-base">
							{!!$post->extract!!}
						</div>
				</div>
			

				<div class="px-6 pt-4 pb-2">
						@foreach($post->tags as $tag)
						<a href="{{route('posts.tag', $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
						@endforeach
				</div>

				<div class="fechaBlog">
				{{$post->created_at->format('l j \\de F \\de Y')}}
				</div>
				<style>
					.fechaBlog{
						margin-top: 20px;
						margin-bottom: 20px;
						text-align: center;
					}
				</style>
</article>