<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Contact Details') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('contact-mail.index')}}" class="bg-gray-700 text-white px-6 rounded py-2">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <p>Name: {{$contact->name}}</p>
                        <p>Email: {{$contact->email}}</p>
                        <p>Phone: {{$contact->phone}}</p>
                    </div>
                    <p class="mb-6">Message: {{$contact->massege}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
