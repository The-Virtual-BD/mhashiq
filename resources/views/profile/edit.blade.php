<x-app-layout>
    <x-dashnav/>

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-4">
        <div class="">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-4 hidden">
        <div class="">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
    <form action="{{route('profile.pp',$user->id)}}" method="post" enctype="multipart/form-data" class="invisible">
        @csrf
        @method('patch')
        <input type="file" name="photo" id="photo_input">
        <button type="submit" id="submitPP"></button>
    </form>



    <x-slot name="script">
        <script>
            var fields = ['address', 'bio', 'bio_mini', 'aca_position', 'job_position', 'degrees'];
            for (var i = 0; i < fields.length; i++) {
            CKEDITOR.replace(fields[i], { customConfig: '/js/ckconfig.js' });
            }


            $('#profile_pic').click(function (e) {
                e.preventDefault();
                $("#photo_input").click();
            });

            $("#photo_input").on('input', function() {
                $("#submitPP").click();
            });
        </script>
    </x-slot>
</x-app-layout>
