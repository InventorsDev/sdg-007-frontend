<template>
  <div class="bg">
    <img src="~/assets/images/white-logo.png" alt="" class="logo" />

    <div class="links">
      <div>
        <NuxtLink class="sk" to="/home">
          <div class="side-link">
            <img src="~/assets/images/home-icon.svg" alt="" />
            <p>Home</p>
          </div>
        </NuxtLink>
        <hr />
      </div>
      <div>
        <NuxtLink class="sk" to="/aboutPage">
          <div class="side-link">
            <img src="~/assets/images/aboutus-icon.svg" alt="" />
            <p>About</p>
          </div>
        </NuxtLink>
        <hr />
      </div>
      <div>
        <NuxtLink class="sk" to="/teamPage">
          <div class="side-link">
            <img src="~/assets/images/team.svg" alt="" />
            <p>Team</p>
          </div>
        </NuxtLink>
        <hr />
      </div>
      <div>
        <NuxtLink class="sk" to="/reviews">
          <div class="side-link">
            <img src="~/assets/images/reviews.svg" alt="" />
            <p>Review</p>
          </div>
        </NuxtLink>
      </div>
    </div>
    <NuxtLink class="sk" to="/subscribepage">
      <p class="bottom-info">Sign up to our Newsletter</p>
    </NuxtLink>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
.bg {
  height: 100vh;
  width: 100%;
}

.logo {
  width: 125px;
}

.links {
  margin-top: 40px;
  display: flex;
  flex-direction: column;
}

.sk {
  text-decoration: none;
}

.side-link {
  display: flex;
  color: #fff;
  font-weight: normal;
  margin: 20px 0;
}

.side-link p {
  margin-left: 15px;
}

hr {
  width: 100px;
  margin: 30px 0 15px 35px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.bottom-info {
  position: absolute;
  bottom: 8%;
  left: 50%;
  transform: translateX(-50%);
  font-size: 11px;
  font-weight: 500;
  color: #fff;
}
</style>
