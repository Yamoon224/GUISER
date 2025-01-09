<x-auth-layout :title="__('locale.sign_in')" :description="__('locale.input_your_info')">
    <!-- Session Status -->
    <p id="report-error" class="text-center text-danger"></p>

    <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf
        <!-- Email Address -->
        <div class="form-group">
            <x-input-label class="control-label" for="username" :value="__('locale.username').' '.__('locale.or').' '.__('locale.mail_address')" />
            <x-text-input id="username" class="form-control" type="text" name="username" :value="old('username')" placeholder="{{ __('locale.username').' '.__('locale.or').' '.__('locale.mail_address') }}"  title="Please enter you username" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label class="control-label" for="password" :value="__('locale.password')" />
            <x-text-input id="password" class="form-control" type="password"  placeholder="{{ __('locale.password') }}" name="password" required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox login-checkbox">
            <label><input type="checkbox" class="i-checks"> @lang('locale.remember_me') </label>
        </div>
        <button class="btn btn-success btn-block loginbtn">@lang('locale.sign_in')</button>
        <a class="btn btn-default btn-block" href="{{ route('register') }}">@lang('locale.sign_up')</a>
    </form>
</x-auth-layout>
