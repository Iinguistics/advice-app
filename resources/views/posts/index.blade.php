@extends('layouts.app')

@section('content')
<div class="flex justify-center">
 <div class="w-8/12 bg-white p-6 rounded-lg"> 
  <form action="{{ route('posts') }}" method="post" class="mb-4">
  @csrf
    <div class="mb-4">
     <label for="body" class="sr-only">Body</label>
     <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Post something">
     </textarea>
     @error('body')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
     @enderror
   </div>
    
    
    <div class="text-center">
    <button type="submit" class="bg-indigo-800 text-white p-3 rounded w-1/3 mt-4 ">
      Post
     </button>
    </div>
    
  </form>

  @if ($posts->count())
   @foreach ($posts as $post)
   <div class="mb-4">
    <a href="" class="text-blue">{{ $post->user->username }} </a><span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2">{{ $post->body }}</p>
   </div>
   @endforeach
   
   <!-- paginate -->
   {{ $posts->links() }}
  @else
  <h5>There are currently no posts.</h5>
  @endif
 </div>
</div>
@endsection()