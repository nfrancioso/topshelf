{{ html()->modelForm($logged_in_user, 'PATCH', route('frontend.user.profile.update'))->attribute('enctype', 'multipart/form-data')->open() }}


@if ($logged_in_user->canChangeEmail())
    <div class="row">
        <div class="col">
            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i> {{  __('strings.frontend.user.change_email_notice') }}
            </div>

            <div class="form-group">
                {{ html()->label(__('Email'))->for('email') }}

                {{ html()->email('email')
                    ->class('form-control border-input')
                    ->placeholder(__('Email'))
                    ->attribute('maxlength', 191)
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
@endif

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      {{ html()->label(__('First Name'))->for('first_name') }}

                      {{ html()->text('first_name')
                          ->class('form-control border-input')
                          ->placeholder(__('First Name'))
                          ->attribute('maxlength', 191)
                          ->required() }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      {{ html()->label(__('Last Name'))->for('last_name') }}

                      {{ html()->text('last_name')
                          ->class('form-control border-input')
                          ->placeholder(__('Last Name'))
                          ->attribute('maxlength', 191)
                          ->required() }}
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ html()->label(__('Address'))->for('address') }}

                        {{ html()->text('12345 Satin St')
                            ->class('form-control border-input')
                            ->placeholder(__('Address'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{ html()->label(__('City'))->for('city') }}

                        {{ html()->text('Orlando')
                            ->class('form-control border-input')
                            ->placeholder(__('City'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ html()->label(__('Country'))->for('country') }}

                        {{ html()->text('USA')
                            ->class('form-control border-input')
                            ->placeholder(__('Country'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ html()->label(__('Postal Code'))->for('postal') }}

                        {{ html()->text('12345')
                            ->type('number')
                            ->class('form-control border-input')
                            ->placeholder(__('Postal Code'))
                            ->attribute('maxlength', 5)
                            ->required() }}
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        {{ html()->label(__('Timezone'))->for('timezone') }}

                        <select name="timezone" id="timezone" class="form-control border-input" required="required">
                            @foreach (timezone_identifiers_list() as $timezone)
                                <option value="{{ $timezone }}" {{ $timezone == $logged_in_user->timezone ? 'selected' : '' }} {{ $timezone == old('timezone') ? ' selected' : '' }}>{{ $timezone }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group mb-0 clearfix">
                        {{ form_submit(__('Update Profile')) }}
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            {{ html()->closeModelForm() }}

            @push('after-scripts')
                <script>
                    $(function() {
                        var avatar_location = $("#avatar_location");

                        if ($('input[name=avatar_type]:checked').val() === 'storage') {
                            avatar_location.show();
                        } else {
                            avatar_location.hide();
                        }

                        $('input[name=avatar_type]').change(function() {
                            if ($(this).val() === 'storage') {
                                avatar_location.show();
                            } else {
                                avatar_location.hide();
                            }
                        });
                    });
                </script>
            @endpush
