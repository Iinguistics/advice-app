@extends('layouts.app')

@section('content')
<div class="flex justify-center">
 <div class="w-4/12 bg-white p-6 rounded-lg"> 
  <form action="{{ route('register') }}" method="post">
    @csrf
   <div class="mb-4">
   <label for="name" class="sr-only">Name</label>
   <input type="text" name="name" id="name" placeholder="Your Name" 
   class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}"
   />
   @error('name')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
   @enderror
   </div>

   <div class="mb-4">
   <label for="username" class="sr-only">Userame</label>
   <input type="text" name="username" id="name" placeholder="Username" 
   class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('username') }}"
   />
   @error('username')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
   @enderror
   </div>

   <div class="mb-4">
   <label for="email" class="sr-only">Email</label>
   <input type="text" name="email" id="email" placeholder="Your Email" 
   class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}"
   />
   @error('email')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
   @enderror
   </div>

   <div class="mb-4">
   <label for="password" class="sr-only">Password</label>
   <input type="password" name="password" id="password" placeholder="Enter a password" 
   class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""
   />
   @error('password')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
   @enderror
   </div>

   <div class="mb-4">
   <label for="confirm" class="sr-only">Confirm Password</label>
   <input type="password" name="password_confirmation" id="confirm" placeholder="Confirm password" 
   class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""
   />
   @error('confirm')
    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
   @enderror
   </div>
   <button type="submit" class="bg-indigo-800 text-white p-3 rounded w-full">
     Register
     </button>
  </form>
 </div>
</div>
@endsection()