<nav id="nav">
    <div class="logo"><a href="/">Nana's Portofolio</a></div>
    <div>
      <ul class="nav-link">
        <li><a href="/about" class="{{ ($title === "about") ? 'active' : '' }}">About</a></li>
        <li><a href="/resume" class="{{ ($title === "resume") ? 'active' : '' }}">resume</a></li>
        <li><a href="/project" class="{{ ($title === "project") ? 'active' : '' }}">project</a></li>
        <li><a href="/contact" class="{{ ($title === "contact") ? 'active' : '' }}">Contact</a></li>
      </ul>
    </div>
  </nav>