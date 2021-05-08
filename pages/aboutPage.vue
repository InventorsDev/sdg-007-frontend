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
      <h2>About DV App</h2>
      <span class="line"></span>
      <div class="abt">
        <p>
          There is a popular saying that <strong>"Health is Wealth"</strong>.
        </p>
        <p>
          Our society right now is faced with the challenge of dealing with fake
          drugs which have taken over our markets and even going to the extent
          of claiming innocent lives. We saw this as a problem to our society
          and decided to rise to the challenges to limit its destruction to
          lives.
        </p>
        <p>
          We decided to provide a solution to this challenge which is in line
          with the United Nations Sustainable Development Goal (SDG) No. 3: Good
          Health and Well-being i.e. Ensuring healthy lives and promoting
          well-being for all and at all ages which is essential to sustainable
          development. We arrived at a solution by developing this App and named
          it "DV App" (Drug Verification app).
        </p>
        <p>
          We designed and built this app for everyone in Nigeria to be able to
          verify their drugs upon purchase from any drug store or pharmacy, if
          the drugs they are about to consume is void of harm and if it is fully
          endorsed by the National Agency of Foods and Drugs Administration
          Company (NAFDAC) which is concerned with the regularization of
          consumables.
        </p>
      </div>
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
  background-color: #fbfbfb;
  height: 100%;
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
  text-align: center;
  align-items: center;
  height: 100%;
  margin: 50px 0;
}

h2 {
  background: -webkit-linear-gradient(180deg, #3e3fd7 0%, #b83ed7 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;
  font-size: 22px;
}

.abt {
  font-size: 15px;
  line-height: 25px;
}

.abt p {
  margin: 20px 0;
}

.line {
  width: 45px;
  height: 8px;
  border-radius: 10px;
  background: linear-gradient(180deg, #b83ed7 0%, #3e3fd7 100%);
  margin: 2% 0 7%;
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
