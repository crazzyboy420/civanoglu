<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Page') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('admin-page.index')}}" class="bg-gray-700 text-white px-6 rounded py-2">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('admin-page.store')}}" method="post" class="w-full flex justify-center">@csrf
                        <div class="w-6/12">
                            <div class="mb-3">
                                <label class="civanoglu-label" for="name">Page Name:</label>
                                <input class="civanoglu-input" type="text" id="name" name="name" value="{{old('name')}}" required>
                                @error('name')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="civanoglu-label" for="slug">Page Slug:</label>
                                <input class="civanoglu-input" type="text" id="slug" name="slug" value="{{old('slug')}}" required>
                                @error('slug')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="civanoglu-label" for="content">Page Content:</label>
                                <input class="civanoglu-input" type="text" id="content" name="contents" value="{{old('contents')}}" required>
                                @error('contents')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="submit" class="mt-2 text-white bg-gray-700 py-2 px-6 rounded uppercase" value="Submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
