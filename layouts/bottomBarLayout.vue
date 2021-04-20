<template>
  <div>
    <Nuxt />
    <div class="bottom-area">
      <NuxtLink to="/aboutPage">
        <div class="icon">
          <aboutUsIcon />
        </div>
      </NuxtLink>
      <NuxtLink to="/home">
        <div class="icon">
          <homeIcon />
        </div>
      </NuxtLink>
      <NuxtLink to="/teamPage">
        <div class="icon">
          <teamIcon />
        </div>
      </NuxtLink>
    </div>
  </div>
</template>

<style>
html {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

.bg {
  height: 100vh;
  width: 100%;
  background: #f4f8fe;
}

img {
  max-width: 100%;
}

@media only screen and (min-device-width: 800px) and (min-width: 561px) {
  html {
    display: none;
  }
}

*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
}

svg path {
  fill: #2165c6;
}

.nuxt-link-exact-active svg path {
  fill: #0e448f;
}

.bottom-area {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #fcfcfc;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 50px;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
  box-shadow: 0px 0 3px rgba(143, 143, 143, 0.8);
}
</style>
