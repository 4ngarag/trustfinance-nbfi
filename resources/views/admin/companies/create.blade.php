<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-ends m-2 p-2">
                <a href="{{ route('admin.companies.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>

            <div class="space-y-8 divide-y divide-gray-200 mt-10">
            <form method="POST" action="{{ route('admin.companies.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="name_en" class="block text-sm font-medium text-gray-700">Name (EN)</label>
                        <div class="mt-1">
                            <input type="text" id="name_en" name="name_en" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name_en') border-red-400 @enderror" />
                        </div>
                        @error('name_en')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="name_mn" class="block text-sm font-medium text-gray-700">Name (MN)</label>
                        <div class="mt-1">
                            <input type="text" id="name_mn" name="name_mn" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name_mn') border-red-400 @enderror" />
                        </div>
                        @error('name_mn')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="intro_en" class="block text-sm font-medium text-gray-700">Intro (EN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_en" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_en') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_en')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="intro_mn" class="block text-sm font-medium text-gray-700">Intro (MN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_mn" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_mn') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_mn')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="name_ru" class="block text-sm font-medium text-gray-700">Name (RU)</label>
                        <div class="mt-1">
                            <input type="text" id="name_ru" name="name_ru" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name_ru') border-red-400 @enderror" />
                        </div>
                        @error('name_ru')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="start_year" class="block text-sm font-medium text-gray-700">Start Year</label>
                        <div class="mt-1">
                            <input type="text" id="start_year" name="start_year" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('start_year') border-red-400 @enderror" />
                        </div>
                        @error('start_year')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="intro_ru" class="block text-sm font-medium text-gray-700">Intro (RU)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_ru" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_ru') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_ru')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="logo_en" class="block text-sm font-medium text-gray-700">Logo (EN)</label>
                        <div class="mt-1">
                            <input type="file" id="logo_en" name="logo_en" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('logo_en') border-red-400 @enderror" />
                        </div>
                        @error('logo_en')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="logo_ru" class="block text-sm font-medium text-gray-700">Logo (RU)</label>
                        <div class="mt-1">
                            <input type="file" id="logo_ru" name="logo_ru" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('logo_ru') border-red-400 @enderror" />
                        </div>
                        @error('logo_ru')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="logo_mn" class="block text-sm font-medium text-gray-700">Logo (MN)</label>
                        <div class="mt-1">
                            <input type="file" id="logo_mn" name="logo_mn" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('logo_mn') border-red-400 @enderror" />
                        </div>
                        @error('logo_mn')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="direction_en" class="block text-sm font-medium text-gray-700">Direction (EN)</label>
                        <div class="mt-1">
                            <input type="text" id="direction_en" name="direction_en" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('direction_en') border-red-400 @enderror" />
                        </div>
                        @error('direction_en')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="direction_ru" class="block text-sm font-medium text-gray-700">Direction (RU)</label>
                        <div class="mt-1">
                            <input type="text" id="direction_ru" name="direction_ru" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('direction_ru') border-red-400 @enderror" />
                        </div>
                        @error('direction_ru')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="direction_mn" class="block text-sm font-medium text-gray-700">Direction (MN)</label>
                        <div class="mt-1">
                            <input type="text" id="direction_mn" name="direction_mn" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('direction_mn') border-red-400 @enderror" />
                        </div>
                        @error('direction_mn')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="company_size" class="block text-sm font-medium text-gray-700">Company Size</label>
                        <div class="mt-1">
                            <input type="text" id="company_size" name="company_size" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('company_size') border-red-400 @enderror" />
                        </div>
                        @error('company_size')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <div class="mt-1">
                            <input type="text" id="phone" name="phone" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-400 @enderror" />
                        </div>
                        @error('phone')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input type="text" id="email" name="email" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                        </div>
                        @error('email')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook Link</label>
                        <div class="mt-1">
                            <input type="text" id="facebook" name="facebook" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('facebook') border-red-400 @enderror" />
                        </div>
                        @error('facebook')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-6 p-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="width: 100%;">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-admin-layout>