<nav class="navbar content is-fullhd is-primary" role="navigation" aria-label="main navigation">
  <div class="container">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">TodoList</a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item {{ Request::is('/') ? 'is-active' : '' }}" href="/">Home</a>

		  <a class="navbar-item {{ Request::is('todo/create') ? 'is-active' : '' }}" href="/todo/create">Add Todo</a>
    </div>

    <div class="navbar-end">
    	
    </div>
  </div>
</div>
</nav>