<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li> <a class="{{ Nav::isRoute('manage.dashboard') }}" href="{{route('manage.dashboard')}}">Dashboard</a> </li>
    </ul>
    <p class="menu-label">
      Content
    </p>
    <ul class="menu-list">
      <li> <a class="{{ Nav::isResource('posts',2) }}" href="{{route('posts.index')}}">Blog Posts</a> </li>
    </ul>
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li> <a class="{{ Nav::isResource('users') }}" href="{{ route('users.index') }}">Manage Users</a> </li>
      <li class="menu"> <a v-on:click="seen = !seen" class="{{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul v-if="seen" class="submenu">
          <li> <a class="{{ Nav::isResource('roles.index') }}" href="{{ route('roles.index')}}">Roles</a> </li>
          <li> <a class="{{ Nav::isResource('permissions.index') }}" href="{{ route('permissions.index')}}">Permissions</a> </li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
