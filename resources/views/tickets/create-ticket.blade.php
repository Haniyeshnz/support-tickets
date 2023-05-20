<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="mb-4 text-2xl">Create ticket</h1>
        <div class="card bg-white rounded-lg">
            <form action="" method="POST" class="card-body p-4 flex flex-col gap-5">
                <!-- START Title -->
                <label class="form-label">
                    Title
                    <input name="title" class="input input-sm input-bordered w-full">
                </label>
                <!-- END Title -->

                <!-- START Description -->
                <label class="form-label">
                    Description
                    <textarea name="description" class="textarea textarea-sm textarea-bordered w-full"
                        rows="3"></textarea>
                </label>
                <!-- END Description -->

                <!-- START Labels -->
                <div>
                    <label class="form-label">Labels</label>
                    <div class="flex gap-3">
                        <!-- START repeat this element per label -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                bug
                            </label>
                        </div>
                        <!-- END repeat this element per label -->
                        <!-- START repeat this element per label -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                question
                            </label>
                        </div>
                        <!-- END repeat this element per label -->
                        <!-- START repeat this element per label -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                enhancement
                            </label>
                        </div>
                        <!-- END repeat this element per label -->
                    </div>
                </div>
                <!-- END Labels -->

                <!-- START Categories -->
                <div>
                    <label class="form-label">Categories</label>
                    <div class="flex gap-3">
                        <!-- START repeat this element per category -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                Uncategorized
                            </label>
                        </div>
                        <!-- END repeat this element per category -->
                        <!-- START repeat this element per category -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                Billing/Payments
                            </label>
                        </div>
                        <!-- END repeat this element per category -->
                        <!-- START repeat this element per category -->
                        <div class="form-control">
                            <label class="label cursor-pointer gap-1">
                                <input class="checkbox checkbox-sm checkbox-primary" type="checkbox">
                                Technical question
                            </label>
                        </div>
                        <!-- END repeat this element per category -->
                    </div>
                </div>
                <!-- END Categories -->

                <!-- START Priority -->
                <label class="form-label">
                    Priority
                    <select class="select select-sm select-bordered w-full">
                        <option value="1">Low</option>
                        <option value="2">Normal</option>
                        <option value="3">High</option>
                    </select>
                </label>
                <!-- END Priority -->


                <!-- START Priority -->
                <label class="file-upload card form-label bg-base-300 py-9 text-center">
                    <span class="file-upload-text">Drag & Drop your file or Browse</span>
                    <input class="file-upload-input input input-sm input-bordered w-full" type="file" multiple>
                </label>
                <!-- END Priority -->
                <div>
                    <button type="button" class="btn px-7 btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="/src/js/file-upload.ts"></script>
    <script type="module" src="/src/main.ts"></script>
</body>

</html>