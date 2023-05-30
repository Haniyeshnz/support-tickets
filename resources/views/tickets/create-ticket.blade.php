<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create ticket</title>
</head>

<body>
    <div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="mb-4 text-2xl">Create ticket</h1>
        <div class="card bg-white rounded-lg">
            <form action="{{route('ticket.new')}}" method="POST" class="card-body p-4 flex flex-col gap-5">
                @csrf
                <!-- START Title -->
                <label class="form-label">
                    Title
                    <input name="title" class="input input-sm input-bordered w-full">
                </label>
                <!-- END Title -->

                <!-- START Description -->
                <label class="form-label">
                    Description
                    <textarea name="message" class="textarea textarea-sm textarea-bordered w-full" rows="3"></textarea>
                </label>
                <!-- END Description -->

                <!-- START Labels -->
                <div>
                    <label class="form-label">Labels</label>
                    <div class="flex gap-3">
                        <!-- START repeat this element per label -->
                        @foreach ($labels as $label)
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input name="label_id" value="{{ $label->id }}" class="checkbox checkbox-sm checkbox-primary" type="radio">
                                {{ $label->name }}
                            </label>
                        </div>
                        @endforeach     
                        <!-- END repeat this element per label -->
                    </div>
                </div>
                <!-- END Labels -->

                <!-- START Categories -->
                <div>
                    <label class="form-label">Categories</label>
                    <div class="flex gap-3">
                        <!-- START repeat this element per category -->
                        @foreach ($categories as $category)
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1" >
                                <input name="category_id" value="{{ $category->id }}" class="checkbox checkbox-sm checkbox-primary" type="radio">
                                {{ $category->name }}
                            </label>
                        </div>
                        @endforeach
                        <!-- END repeat this element per category -->
                    </div>
                </div>
                <!-- END Categories -->

                <!-- START Priority -->
                <label   class="form-label">
                    Priority
                    <select name="priority" class="select select-bordered w-full  ">
                    @foreach(App\Enums\PriorityEnum::values() as $key=>$value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                    </select>
                </label>
                <!-- END Priority -->


                <!-- START Priority -->
                <label class="file-upload card form-label bg-base-300 py-9 text-center">
                    <span class="file-upload-text">Drag & Drop your file or Browse</span>
                    <input name="asset" class="file-upload-input input input-sm input-bordered w-full" type="file" multiple>
                </label>
                <!-- END Priority -->
                <div>
                    <button type="submit
                    " class="btn px-7 btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @vite(['resources/js/main.ts','resources/js/file-upload.ts'])
</body>

</html>