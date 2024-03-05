<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 font-inter">
    
    {{-- sidebar start --}}

        <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
            <div class="flex items-center pb-4">
                <a href="#" class="text-2xl no-underline text-slate-600 font-semibold"><span class="text-slate-300">Home</span> Sales</a>
            </div>

            <hr class="h-[3px] border-0 bg-gray-200 dark:bg-gray-700">

            <ul class="mt-4 list-none p-0">
                <li class="mb-3">
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-slate-800 rounded-lg no-underline">
                        <i class="ri-home-3-line mr-3 text-lg"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-slate-800 rounded-lg no-underline">
                        <i class="ri-grid-line mr-3 text-lg"></i>
                        <span>All Post</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-slate-800 rounded-lg no-underline">
                        <i class="ri-add-box-line mr-3 text-lg"></i>
                        <span>Add Post</span>
                    </a>
                </li>
            </ul>
        </div>

    {{-- sidebar end --}}

    {{-- main start --}}
    <main class="w-[calc(100%-256px)] ml-[260px] min-h-screen">
        <div class="bg-white flex items-center px-8 py-2 shadow-md shadow-black/5">
           <a href="" class="no-underline text-gray-800">Dashboard</a>
        </div>
    </main>
    {{-- main end --}}

</body>
</html>