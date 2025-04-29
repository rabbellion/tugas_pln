@props(['type' => 'default'])

@if($type === 'admin')
<nav class="navbar-adm">
    <div class="components">
        <img src="{{  asset('img/pln.png') }}" alt="logo" width="100" height="100"/>
        <div class="jam">pppp</div>
        <div class="">vsss</div>
    </div>
</nav>
@elseif($type === 'user')
<nav class="nvbar-user">hai</nav>
@else($type === 'guest')
<nav class="navbar-guest">pppp</nav>
@endif