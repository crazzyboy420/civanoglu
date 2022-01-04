<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Contact Mails') }}
            </h2>
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
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Phone</th>
                            <th class="border px-4 w-72 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td class="border px-4 py-2">{{$contact->name}}</td>
                            <td class="border px-4 py-2">{{$contact->email}}</td>
                            <td class="border px-4 py-2">{{$contact->phone}}</td>
                            <td class="border px-4 py-2 text-center">
                                <a class="bg-green-500 text-xs py-2 px-4 text-white rounded" href="{{route('contact-mail.show',$contact->id)}}">View</a>
                                <form action="{{route('contact-mail.destroy',$contact->id)}}" method="post" class="inline-block" onsubmit="return confirm('Do you want to delete this property?');"> @csrf @method('delete')
                                    <button class="bg-red-500 text-xs inline-block py-2 px-4 text-white rounded" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
