<x-auth-layout :title="__('locale.sign_up')" :description="__('locale.input_your_info')">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <p id="report-error"></p>

        <!-- Name -->
        <div class="form-group">
            <x-input-label for="name" :value="__('locale.name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="{{ __('locale.name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="firstname" :value="__('locale.firstname')" />
            <x-text-input id="firstname" class="form-control" type="text" name="firstname" placeholder="{{ __('locale.firstname') }}" :value="old('firstname')" required autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="gender" :value="__('locale.gender')" />
            <select id="gender" class="form-control" name="gender" required>
                <option value="">-- @lang('locale.select') --</option>
                <option>@lang('locale.man')</option>
                <option>@lang('locale.woman')</option>
                <option>@lang('locale.other', ['suffix'=>''])</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="birthday" :value="__('locale.birthday')" />
            <x-text-input id="birthday" class="form-control" type="date" name="birthday" :value="old('birthday')" placeholder="{{ __('locale.birthday') }}" required autocomplete="birthday" />
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="profession" :value="__('locale.profession')" />
            <select id="profession" class="form-control" name="profession_id" required>
                <option value="">-- @lang('locale.select') --</option>
                @foreach ($professions as $item)
                <option value="{{ $item->id }}">{{ ucfirst(app()->getLocale() == 'en' ? $item->name : $item->nom) }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="graduate" :value="__('locale.graduate')" />
            <select id="graduate" class="form-control" name="graduate_id" required>
                <option value="">-- @lang('locale.select') --</option>
                @foreach ($graduates as $item)
                <option value="{{ $item->id }}">{{ ucfirst(app()->getLocale() == 'en' ? $item->name : $item->nom) }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('graduate')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="phone" :value="__('locale.phone')" />
            <x-text-input id="phone" class="form-control" type="tel" name="phone" :value="old('phone')" required autocomplete="phone"  placeholder="{{ __('locale.phone') }}" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="address" :value="__('locale.address')" />
            <x-text-input id="address" class="form-control" type="text" name="address" :value="old('address')" required autocomplete="address" placeholder="{{ __('locale.address') }}" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="username" :value="__('locale.username')" />
            <x-text-input id="username" class="form-control" type="tel" name="username" :value="old('username')" required autocomplete="username" placeholder="{{ __('locale.username') }}" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('locale.mail_address')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="email"  placeholder="{{ __('locale.mail_address') }}"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('locale.password')" />
            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password"  placeholder="{{ __('locale.password') }}"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-input-label for="password_confirmation" :value="__('locale.password_confirmation')" />
            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('locale.password_confirmation') }}"/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="btn-block loginbtn">@lang('locale.sign_up')</x-primary-button>
    </form>
    <p class="text-center text-sm"><a class="help-block small" href="{{ route('login') }}">@lang('locale.sign_in')</a></p> 
</x-auth-layout>
