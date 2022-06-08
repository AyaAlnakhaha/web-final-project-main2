<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="container" style="display: inline-flex ; justify-content: space-between">
                        <h6 class="text-white text-capitalize ps-3">Products table</h6>

                        <button type="submit" class="btn btn-outline-primary" form="form">
                                save changes
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class=" p-3 align-items-center justify-content-center mb-0">
                <div class="col-xs-1 center-block">
                {{--                    class="table align-items-center justify-content-center mb-0"--}}


                <!-- Name -->
                    <div style="display: block">
                        <x-label for="name" :value="__('Name')"/>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                 required autofocus/>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4" style="display: block">
                        <x-label for="email" :value="__('Email')"/>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                 required/>
                    </div>

                    <!-- Phone -->
                    <div class="mt-4" style="display: block">
                        <x-label for="phone" :value="__('Phone')"/>

                        <x-input id="phone" class="block mt-1 w-full"
                                 type="number"
                                 name="phone"
                                />
                    </div>
                    <!-- Password -->
                    <div class="mt-4" style="display: block">
                        <x-label for="password" :value="__('Password')"/>

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password"/>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4" style="display: block">
                        <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required/>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
