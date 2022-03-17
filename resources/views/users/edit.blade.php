<x-layout>

    <x-setting :heading="'Hello ' . $user->name">
        <form method="POST" action="/account/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('name', $user->name)"/>
            <x-form.input name="email" :value="old('email', $user->email)"/>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnails', $user->thumbnail)" />
                </div>

                <img src="{{ asset('/storage/' . $user->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.input name="password" :value="old('password', $user->password)"/>

            <x-form.button>Update</x-form.button>

        </form>
    </x-setting>
</x-layout>
