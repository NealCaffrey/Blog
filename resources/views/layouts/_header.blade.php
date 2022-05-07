<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/"><\/\/\></a>
        <i class="fa fa-bars" aria-hidden="true" id="navIcon" @click="change($event)"></i>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'PHP') }}">PHP</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'MySQL') }}">MySQL</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Linux') }}">Linux</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Web') }}">Web</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Algorithm') }}">Algorithm</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Review') }}">Review</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Other') }}">Other</a></li>
            </ul>
        </div>
        <ul class="navbar-nav justify-content-end" id="searchBox">
            <li class="nav-item">
                <input type="text" name="search" placeholder="Search" id="search" @keyup.enter="search($event)">
            </li>
        </ul>
    </div>
    <div class="container" id="navbar-list">
      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <a href="{{ route('category.show', 'PHP') }}"><li class="nav-item">PHP</li></a>
          <a href="{{ route('category.show', 'MySQL') }}"><li class="nav-item">MySQL</li></a>
          <a href="{{ route('category.show', 'Linux') }}"><li class="nav-item">Linux</li></a>
          <a href="{{ route('category.show', 'Web') }}"><li class="nav-item">Web</li></a>
          <a href="{{ route('category.show', 'Algorithm') }}"><li class="nav-item">Algorithm</li></a>
          <a href="{{ route('category.show', 'Review') }}"><li class="nav-item">Review</li></a>
          <a href="{{ route('category.show', 'Other') }}"><li class="nav-item">Other</li></a>
        </ul>
      </div>
    </div>
</nav>

