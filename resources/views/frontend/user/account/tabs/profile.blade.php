<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>{{ __('avatar') }}</th>
            <td><img src="{{ $logged_in_user->picture }}" class="user-profile-image" /></td>
        </tr>
        <tr>
            <th>{{ __('name') }}</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('email') }}</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>
        <tr>
            <th>{{ __('created at') }}</th>
            <td>{{ $logged_in_user->created_at->timezone(get_user_timezone()) }} ({{ $logged_in_user->created_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>{{ __('last updated') }}</th>
            <td>{{ $logged_in_user->updated_at->timezone(get_user_timezone()) }} ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
        </tr>
    </table>
</div>
