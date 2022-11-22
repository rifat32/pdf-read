<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body >
    <div class="container mt-5">

        <div>
            <div name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                   Create Project
                </h2>
            </div>
            {{-- ex using component x-component_name --}}
            @if (Session::has('success'))
                <div>
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div>
                    {{ session()->get('error') }}
                </div>
            @endif

            <div class="py-12">
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form action="{{ route('file.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="mb-2"> <span>Attachments</span>
                                    <div
                                        class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                        <div class="absolute">
                                            <div class="flex flex-col items-center "> <i
                                                    class="fa fa-cloud-upload fa-3x text-gray-200"></i>
                                                <span class="block text-gray-400 font-normal">Attach
                                                    you files here</span> <span
                                                    class="block text-gray-400 font-normal">or</span>
                                                <span class="block text-blue-400 font-normal">Browse
                                                    files</span>
                                            </div>
                                        </div>
                                        <input type="file" class="form-control" name="file" >
                                    </div>
                                </div>
                                <div class="mt-3 text-center pb-3">
                                    <button type="submit"
                                        class="btn btn-primary">
                                        Go
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>




