<template>
  <div class="bg">
    <img src="~/assets/images/white-logo.png" alt="" class="logo" />

    <div class="links">
      <div>
        <div class="side-link">
          <img src="~/assets/images/home-icon.svg" alt="" />
          <p>Home</p>
        </div>
        <hr />
      </div>
      <div>
        <div class="side-link">
          <img src="~/assets/images/aboutus-icon.svg" alt="" />
          <p>About</p>
        </div>
        <hr />
      </div>
      <div>
        <div class="side-link">
          <img src="~/assets/images/team.svg" alt="" />
          <p>Team</p>
        </div>
        <hr />
      </div>
      <div>
        <div class="side-link">
          <img src="~/assets/images/reviews.svg" alt="" />
          <p>Review</p>
        </div>
      </div>
    </div>
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
  margin-top: 50px;
  display: flex;
  flex-direction: column;
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
  margin: 40px 0 20px 35px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}
</style>
