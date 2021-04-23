<template>
  <div class="splash-bg">
    <img src="~/assets/images/logo-white.png" alt="" />
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
.splash-bg {
  height: 100vh;
  width: 100%;
  background-image: url('https://www.transparenttextures.com/patterns/inspiration-geometry.png'),
    linear-gradient(180deg, #b83ed7 0%, #3e3fd7 100%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.splash-bg img {
  max-width: 100%;
}
</style>
