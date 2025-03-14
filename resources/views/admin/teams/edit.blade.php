<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="w-full rounded-3xl bg-red-500 py-3 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action=" {{ route('admin.teams.update', $team) }} " enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name"
                            value="{{ $team->name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="occupation" :value="__('occupation')" />
                        <x-text-input id="occupation" class="mt-1 block w-full" type="text" name="occupation"
                            value="{{ $team->occupation }}" required autofocus autocomplete="occupation" />
                        <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="location" :value="__('location')" />
                        <x-text-input id="location" class="mt-1 block w-full" type="text" name="location"
                            value="{{ $team->location }}" required autofocus autocomplete="location" />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="avatar" :value="__('avatar')" />
                        <img src=" {{ Storage::url($team->avatar) }}  " alt=""
                            class="h-[90px] w-[90px] rounded-2xl object-cover">
                        <x-text-input id="avatar" class="mt-1 block w-full" type="file" name="avatar" autofocus
                            autocomplete="avatar" />
                        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                    </div>

                    <div class="mt-4 flex items-center justify-end">

                        <button type="submit" class="rounded-full bg-indigo-700 px-6 py-4 font-bold text-white">
                            Update Team
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
