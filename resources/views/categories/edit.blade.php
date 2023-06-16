@extends('layouts.nav')

@section ('content')
<!--  Main Area-->


<div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="mb-4 text-2xl">Edit Category</h1>
        <div class="card bg-white rounded-lg">
            <form action="{{route('categories.update',$category)}}" method="POST" class="card-body p-4 flex flex-col gap-5" >
                @csrf
                <!-- START Name -->
                <label class="form-label">
                    Name
                    <input name="name" type="text" class="input input-sm input-bordered w-full " value="{{ $category->name }}" required
                    placeholder="Category name">
                </label>
                <!-- END Name -->
                <!-- START Slug -->
                <label class="form-label">
                   Slug
                    <input name="slug" class="input input-sm input-bordered w-full" value="{{$category->slug}}" required
                    placeholder="Category slug">
                </label>
                <!-- END Slug-->
                <div>
                    <button type="submit
                    " class="btn px-7 btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


<!-- !End Main Area-->
@endsection