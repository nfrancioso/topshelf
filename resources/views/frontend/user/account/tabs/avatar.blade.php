{{ html()->modelForm($logged_in_user, 'PATCH', route('frontend.user.profile.avatar'))->attribute('enctype', 'multipart/form-data')->open() }}

<div class="row">
  <div class="col-md-12">
      <div class="form-group">
          {{ html()->label(__('Avatar'))->for('avatar') }}

          <div class="radio">
              <input type="radio" name="avatar_type" value="gravatar" {{ $logged_in_user->avatar_type == 'gravatar' ? 'checked' : '' }} /> Gravatar
            </div>
          <div class="radio">
              <input type="radio" name="avatar_type" value="storage" {{ $logged_in_user->avatar_type == 'storage' ? 'checked' : '' }} /> Upload
          </div>
              @foreach ($logged_in_user->providers as $provider)
                  @if (strlen($provider->avatar))
                  <div class="radio">
                      <input type="radio" name="avatar_type" value="{{ $provider->provider }}" {{ $logged_in_user->avatar_type == $provider->provider ? 'checked' : '' }} /> {{ ucfirst($provider->provider) }}
                    </div>
                  @endif
              @endforeach
      </div><!--form-group-->

      <div class="form-group" id="avatar_location">
          {{ html()->file('avatar_location')->class('form-control border-input') }}
      </div><!--form-group-->
  </div><!--col-->
</div>

            <div class="row">
                <div class="col">
                    <div class="form-group mb-0 clearfix">
                        {{ form_submit(__('Update Avatar')) }}
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
