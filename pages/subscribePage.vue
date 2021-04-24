<template>
  <div class="bg">
    <div class="top">
      <img src="~/assets/images/logo.png" class="logo" alt="" />
      <div @click="toggleSideBar">
        <toggleIcon />
      </div>
    </div>
    <div @click="goBack">
      <p class="back">&#x3c; Back</p>
    </div>
    <div class="content-center">
      <img src="~/assets/images/newsletter.png" class="newsletter-img" alt="" />
      <p class="infoo">Subscribe to our newsletter to receive weekly updates</p>
      <form action="" class="form">
        <div class="form-area">
          <input
            type="text"
            placeholder="Enter Email Address"
            id="inputField"
          />
        </div>
        <div class="btn-area">
          <button class="searchBtn" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <sideBar class="sidebar" />
  </div>
</template>

<script>
export default {
  layout: 'bottomBarLayout',
  methods: {
    goBack() {
      this.$router.back()
    },
    toggleSideBar() {
      let sideBar = document.querySelector('.sidebar')
      sideBar.classList.toggle('show')
    },
  },
}
</script>

<style scoped>
.bg {
  background-color: #e5e5e5;
  padding: 30px 25px;
  position: relative;
}
.top {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  width: 100px;
}

.back {
  color: rgba(0, 0, 0, 0.5);
  font-weight: bold;
  font-size: 13px;
  margin-top: 5%;
}

.content-center {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 80%;
}

.newsletter-img {
  width: 272px;
}

.infoo {
  font-size: 20px;
  font-weight: bold;
  width: 272px;
  margin: 5% 0;
  color: #b83ed7;
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
}

.form-area input {
  width: 320px;
  padding: 13px;
  background-color: transparent;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  border-radius: 10px;
  margin: 8% 0;
}

.form-area input:focus {
  outline: none;
}

.form-area input::placeholder {
  color: rgba(0, 0, 0, 0.2);
}

.searchBtn {
  background: linear-gradient(180deg, #3e3fd7 0%, #b83ed7 100%);
  border-radius: 10px;
  border: none;
  color: #fff;
  padding: 13px 40px;
  font-weight: bold;
  font-size: 16px;
}

.sidebar {
  position: fixed;
  height: 100vh;
  top: 0;
  left: 0;
  z-index: 100;
  background: #5c3fd7;
  overflow: hidden;
  transform: translateX(-100%);
  transition: 0.5s;
}

.show {
  width: 80%;
  transform: translateX(0);
}
</style>
