@extends('layouts.app')

@section('content')

<!-- component -->
<div class="container mx-auto p-4">
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/1.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/2.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/3.jpg') }}"
          alt=""
        />
      </div>
    </div>
    <div class="grid gap-4">
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/4.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/5.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/6.jpg') }}"
          alt=""
        />
      </div>
    </div>
    <div class="grid gap-4">
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/7.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/8.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/9.jpg') }}"
          alt=""
        />
      </div>
    </div>
    <div class="grid gap-4">
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/10.jpg') }}"
          alt=""
        />
      </div>
      <div>
        <img
          class="h-auto max-w-full rounded-lg"
          src="{{ asset('images/portfolio/11.jpg') }}"
          alt=""
        />
      </div>
    </div>
  </div>
</div>

@endsection