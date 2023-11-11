@extends('layouts.admin')

@section('content')

<div class="container mx-auto bg-white rounded-lg p-6 shadow-md mb-8">
    <h1 class="text-3xl font-semibold mb-6 border-b pb-2">Upload Brochure</h1>

    <form method="POST" action="{{route('uploadbroschure')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

       <!-- Dropdown for Subcategories -->
    <select id="subcategorySelect" name="subcategory_id" class="mb-4 p-2 border rounded">
        <!-- Options will be populated by AJAX -->
    </select>

    <!-- File Upload Input -->
    <input type="file" name="brochure" accept="application/pdf" class="mb-4 p-2 border rounded">

    <!-- Submit Button -->
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Upload Brochure
    </button>
    </form>
</div>

@endsection