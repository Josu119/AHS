<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Desking Issues</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Report Hot Desking Issues</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Please provide details about the hot desking issues you encountered.</p>
        </div>

        @if (session('success'))
            <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div class="text-green-500" dark:text-gray-500>
                        <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="text-sm font-medium ml-3">Success!.</div>
                </div>
                <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
        @endif

        <form action="{{ route('feedback.send') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="issue" class="leading-7 text-sm text-gray-600">Choose an Issue</label>
                            <select id="issue" name="issue" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="Desk Availability">Desk Availability</option>
                                <option value="Workspace Cleanliness">Workspace Cleanliness</option>
                                <option value="Noise Levels">Noise Levels</option>
                                <option value="Equipment Malfunction">Equipment Malfunction</option>
                                <option value="Temperature Control">Temperature Control</option>
                                <option value="Security">Security Problem</option>
                                <option value="Others">Other Issues</option>
                            </select>
                        </div>

                        @error('issue')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="details" class="leading-7 text-sm text-gray-600">Details</label>
                            <textarea id="details" name="details" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>

                        @error('details')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="photo" class="leading-7 text-sm text-gray-600">Photo (Optional)</label>
                            <input type="file" id="photo" name="photo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

</body>
</html>
