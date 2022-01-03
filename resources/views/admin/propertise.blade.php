<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Propertise') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('add-property')}}" class="bg-gray-700 text-white px-6 rounded py-2">Add New property</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">Name</th>
                            <th class="border px-4 py-2">Location</th>
                            <th class="border px-4 py-2">Price</th>
                            <th class="border px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($propertise as $propery)
                        <tr>
                            <td class="border px-4 py-2">{{$propery->name}}</td>
                            <td class="border px-4 py-2">{{$propery->locations->name}}</td>
                            <td class="border px-4 py-2">{{$propery->price}}</td>
                            <td class="border px-4 py-2 text-center">
                                <a class="bg-blue-500 text-xs py-2 px-4 text-white rounded" href="{{route('edit-property',$propery->id)}}">Edit</a>
                                <a class="bg-green-500 text-xs py-2 px-4 text-white rounded" href="{{route('property_single', $propery->id)}}">View</a>
                                <form action="{{route('delete-property',$propery->id)}}" method="GET" class="inline-block" onsubmit="return confirm('Do you want to delete this property?');">
                                    <button class="bg-red-500 text-xs inline-block py-2 px-4 text-white rounded" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-6">{{$propertise->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
