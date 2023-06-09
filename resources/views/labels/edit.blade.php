@extends('layouts.nav')

@section ('content')
<!--  Main Area-->


<div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="mb-4 text-2xl">Edit Label</h1>
        <div class="card bg-white rounded-lg">
            <form action="{{route('labels.update',$label)}}" method="POST" class="card-body p-4 flex flex-col gap-5" >
                @csrf
                <!-- START Name -->
                <label class="form-label">
                    Name
                    <input name="name" type="text" class="input input-sm input-bordered w-full " value="{{ $label->name }}" required
                    placeholder="Label name">
                </label>
                <!-- END Name -->
                <!-- START Slug -->
                <label class="form-label">
                   Slug
                    <input name="slug" class="input input-sm input-bordered w-full" value="{{$label->slug}}" required
                    placeholder="Label slug">
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