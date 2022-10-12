<div class="list-group">
    <a href="{{ route('user.dashboard')}}" class="list-group-item {{ Request::is('user/dashboard') ? 'active' : ''}}">@lang('messages.My-account')</a>
    <a href="{{ route('user.edit')}}" class="list-group-item {{ Request::is('user/edit-profile') ? 'active' : ''}}">@lang('messages.Account-change')</a>
    <a href="{{ route('user.password')}}" class="list-group-item {{ Request::is('user/password') ? 'active' : ''}}">@lang('messages.Password')</a>
    <a href="{{ route('user.address')}}" class="list-group-item {{ Request::is('user/address') ? 'active' : ''}}">@lang('messages.Address')</a>
    <a href="{{ route('user.order')}}" class="list-group-item {{ Request::is('user/order') ? 'active' : ''}}">@lang('messages.Order')</a>
    <a class="list-group-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('messages.Logout') </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
