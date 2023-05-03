<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-ends m-2 p-2">
                <a href="{{ route('admin.posts.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>

            <div class="space-y-8 divide-y divide-gray-200 mt-10">
            <form method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="title_en" class="block text-sm font-medium text-gray-700">Title (EN)</label>
                        <div class="mt-1">
                            <input type="text" id="title_en" name="title_en" value="{{ $post->title_en }}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="title_mn" class="block text-sm font-medium text-gray-700">Title (MN)</label>
                        <div class="mt-1">
                            <input type="text" id="title_mn" name="title_mn" value="{{ $post->title_en }}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="full_text_en" class="block text-sm font-medium text-gray-700">Full Text (EN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="full_text_en" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $post->full_text_en }}</textarea>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="full_text_mn" class="block text-sm font-medium text-gray-700">Full Text (MN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="full_text_mn" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $post->full_text_mn }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="title_ru" class="block text-sm font-medium text-gray-700">Title (RU)</label>
                        <div class="mt-1">
                            <input type="text" id="title_ru" name="title_ru" value="{{ $post->title_ru }}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="newimage" class="block text-sm font-medium text-gray-700"> New Image </label>
                        <div class="mt-1">
                            <input type="file" id="newimage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="full_text_ru" class="block text-sm font-medium text-gray-700">Full Text (RU)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="full_text_ru" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $post->full_text_ru }}</textarea>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div>
                            <img class="w-32 h-32" src="{{ Storage::url($post->image) }}">
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="width: 100%;">Update</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </div>
</x-admin-layout>
