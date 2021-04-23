<template>
  <div>
    <Nuxt />
  </div>
</template>

<style>
html {
  font-family: 'Poppins', sans-serif;
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
</style>
