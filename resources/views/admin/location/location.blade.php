<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Location') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('admin-location.create')}}" class="bg-gray-700 text-white px-6 rounded py-2">Add New Location</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Session::get('message'))
                    <p class="text-green-700 py-2 bg-green-200 w-full text-center mb-2">{{Session::get('message')}}</p>
                    @endif
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">Location Name</th>
                            <th class="border px-4 w-72 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                        <tr>
                            <td class="border px-4 py-2">{{$location->name}}</td>
                            <td class="border px-4 py-2 text-center">
                                <a class="bg-blue-500 text-xs py-2 px-4 text-white rounded" href="{{route('admin-location.edit',$location->id)}}">Edit</a>
                                <form action="{{route('admin-location.destroy',$location->id)}}" method="post" class="inline-block" onsubmit="return confirm('Do you want to delete this property?');">@csrf @method('delete')
                                    <button class="bg-red-500 text-xs inline-block py-2 px-4 text-white rounded" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
