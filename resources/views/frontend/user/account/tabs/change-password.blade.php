{{ html()->form('PATCH', route('frontend.auth.password.update'))->open() }}
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
                {{ html()->label(__('Old Pasword'))->for('old_password') }}

                {{ html()->password('old_password')
                    ->class('form-control border-input')
                    ->placeholder(__('Old Password'))
                    ->autofocus()
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                {{ html()->label(__('Password'))->for('password') }}

                {{ html()->password('password')
                    ->class('form-control border-input')
                    ->placeholder(__('Password'))
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                {{ html()->label(__('Password Confirmation'))->for('password_confirmation') }}

                {{ html()->password('password_confirmation')
                    ->class('form-control border-input')
                    ->placeholder(__('Password Confirmation'))
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="form-group mb-0 clearfix">
                {{ form_submit(__('Update') . ' ' . __('Password')) }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
{{ html()->form()->close() }}
