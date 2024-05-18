<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container d-flex justify-content-end gap-4">
    <!--da sostituire con il logo che porta sempre alla home-->
        <x-nav-link href="/" isActive="{{request()->is('/')}}">
          Home
      </x-nav-link>
      <x-nav-link href="/jobs"  isActive="{{request()->is('jobs')}}">
          Jobs
      </x-nav-link>
      <x-nav-link href="/contacts" isActive="{{request()->is('contacts')}}">
          Contacts
      </x-nav-link>
    </div>
  </div>
</nav>