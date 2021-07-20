<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un Subseenits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['route'=> 'subseenits_store']) !!}
                    Name : {!! Form::text('name') !!}
                    <br/>
                    Slug : {!! Form::text('slug') !!}
                    <br/>
                    {!! Form::textarea('description') !!}
                    <br/>
                    {!! Form::submit('Créer') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
