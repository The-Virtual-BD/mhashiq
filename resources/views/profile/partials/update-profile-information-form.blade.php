<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update',$user) }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="grid grid-cols-2 gap-4">
            <div>
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $user->first_name)" required autofocus autocomplete="first_name" />
                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
            </div>
            <div>
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->last_name)" required autocomplete="last_name" />
                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="designation" :value="__('Designation')" />
                <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-full" :value="old('designation', $user->designation)" required autocomplete="designation" />
                <x-input-error class="mt-2" :messages="$errors->get('designation')" />
            </div>
            <div>
                <x-input-label for="orcid_id" :value="__('Orcid ID')" />
                <x-text-input id="orcid_id" name="orcid_id" type="text" class="mt-1 block w-full" :value="old('orcid_id', $user->orcid_id)" required autocomplete="orcid_id" />
                <x-input-error class="mt-2" :messages="$errors->get('orcid_id')" />
            </div>
            <div>
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required autocomplete="phone" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>
            <div>
                <x-input-label for="facebook" :value="__('Facebook')" />
                <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" :value="old('facebook', $user->facebook)"  autocomplete="facebook" />
                <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
            </div>
            <div>
                <x-input-label for="instagram" :value="__('Instagram')" />
                <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $user->instagram)"  autocomplete="instagram" />
                <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
            </div>
            <div>
                <x-input-label for="linkedin" :value="__('Linkedin')" />
                <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $user->linkedin)"  autocomplete="linkedin" />
                <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
            </div>
            <div>
                <x-input-label for="research_gate" :value="__('Research Gate')" />
                <x-text-input id="research_gate" name="research_gate" type="text" class="mt-1 block w-full" :value="old('research_gate', $user->research_gate)"  autocomplete="research_gate" />
                <x-input-error class="mt-2" :messages="$errors->get('research_gate')" />
            </div>
            <div>
                <x-input-label for="google_scolar" :value="__('Scolar')" />
                <x-text-input id="google_scolar" name="google_scolar" type="text" class="mt-1 block w-full" :value="old('google_scolar', $user->google_scolar)"  autocomplete="google_scolar" />
                <x-input-error class="mt-2" :messages="$errors->get('google_scolar')" />
            </div>
            <div>
                <x-input-label for="cv" :value="__('CV')" />
                <input type="file" name="cv" id="cv" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm  text-sm text-nightblue border cursor-pointer file:bg-nightblue file:border-0 file:text-white file:h-full file:uppercase h-10">
                <x-input-error class="mt-2" :messages="$errors->get('cv')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="address" :value="__('Address')" class="mb-2"/>
                <textarea id="address" name="address" rows="3">{{$user->address}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="bio" :value="__('Bio')" class="mb-2"/>
                <textarea id="bio" name="bio" rows="3">{{$user->bio}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('bio')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="bio_mini" :value="__('Sidebar Bio')" class="mb-2"/>
                <textarea id="bio_mini" name="bio_mini" rows="3">{{$user->bio_mini}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('bio_mini')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="aca_position" :value="__('Academic Position')" class="mb-2"/>
                <textarea id="aca_position" name="aca_position" rows="3">{{$user->aca_position}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('aca_position')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="job_position" :value="__('Job Position')" class="mb-2"/>
                <textarea id="job_position" name="job_position" rows="3">{{$user->job_position}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('job_position')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="degrees" :value="__('Degrees')" class="mb-2"/>
                <textarea id="degrees" name="degrees" rows="3">{{$user->degrees}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('degrees')" />
            </div>

        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
