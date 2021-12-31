<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit User') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('admin-user.index')}}" class="bg-gray-700 text-white px-6 rounded py-2">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('admin-user.update',$user->id)}}" method="post" class="w-full flex justify-center">@csrf @method('put')
                        <div class="w-6/12">
                            <div class="mb-3">
                                <label class="civanoglu-label" for="name">Name:</label>
                                <input class="civanoglu-input" type="text" id="name" name="name" value="{{$user->name}}" required>
                                @error('name')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="civanoglu-label" for="email">Email:</label>
                                <input class="civanoglu-input" type="email" id="email" name="email" value="{{$user->email}}" required>
                                @error('email')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="civanoglu-label" for="password">Password</label>
                                <input class="civanoglu-input" type="password" id="password" name="password" value="{{$user->password}}" required>
                                @error('password')
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
