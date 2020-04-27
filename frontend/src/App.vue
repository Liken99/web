<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/about">О нас</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/films">Фильмы</router-link>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <router-view/>
      </div>
    </main>

    <footer>

    </footer>
  </div>
</template>

<style>
  main > .container {
    padding-top: 65px;
  }
</style>