<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Testimonial') }}
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

                <form method="POST" action=" {{ route('admin.testimonials.update', $testimonial) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mt-4">
                        <x-input-label for="project_client" :value="__('project_client')" />

                        <select name="project_client_id" id="project_client_id"
                            class="w-full rounded-lg border border-slate-300 py-3 pl-3">
                            <option value=" {{ $testimonial->client->id }} ">{{ $testimonial->client->name }}</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('project_client')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="message" :value="__('message')" />
                        <textarea name="message" id="message" cols="30" rows="5" class="w-full rounded-xl border border-slate-300"> {{ $testimonial->message }} </textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <img src="{{ Storage::url($testimonial->thumbnail) }} " alt="" class="h-[90px] w-[90px] rounded-2xl object-cover">
                        <x-text-input id="thumbnail" class="mt-1 block w-full" type="file" name="thumbnail" autofocus
                            autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4 flex items-center justify-end">

                        <button type="submit" class="rounded-full bg-indigo-700 px-6 py-4 font-bold text-white">
                            Update Testimonial
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
