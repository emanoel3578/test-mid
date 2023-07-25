@extends('base')

@section('content')
<div class="w-full flex flex-col items-center mt-10 gap-10">
  <div>
    <form method="POST" action="/store-form" class="w-full max-w-sm">
      @csrf
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4 text-gray-700" for="name">
            Name
          </label>
        </div>
        <div class="md:w-2/3">
          <input value="{{ old('name') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="name" id="name" type="text" placeholder="Name">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
            Email
          </label>
        </div>
        <div class="md:w-2/3">
          <input value="{{ old('email') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="email" id="email" placeholder="email@test.com">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="subject">
            Subject
          </label>
        </div>
        <div class="md:w-2/3">
          <input value="{{ old('subject') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="subject" id="subject" placeholder="Subject">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="message">
            Message
          </label>
        </div>
        <div class="md:w-2/3">
          <input value="{{ old('message') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="message" id="message" placeholder="Message">
        </div>
      </div>
      <div class="md:flex md:items-center flex justify-center">
        <div class="flex justify-center bg-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded md:w-1/3">
          <button type="submit">
            Confirm
          </button>
        </div>
      </div>
    </form>
  </div>

  <div>
    @if(Session::has('status'))
      <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold">{!! Session::get('status') !!}</p>
          </div>
        </div>
      </div>
      <div>
        
      </div>
    @endif

    @if (count($errors) > 0)
      <div class="error">
          <ul class="flex flex-col gap-4">
              @foreach ($errors->all() as $error)
                  <li class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  </div>
</div>
@endsection