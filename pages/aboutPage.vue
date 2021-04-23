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
      <p class="abt">
        Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nulla mollis
        neque vel urna accumsan pretium. Vestibulum sed massa et justo hendr
        erit cursus.Nullam vel felis in ante accumsan tempor. Vestibulum nulla
        magna, ultricies ac lectus interdum, sodales tempus erat. Cras id massa
        faucibus, tincidunt neque sit amet, vulputate justo.Ut risus diam,
        sodales sit amet mauris quis, vulputate imperdiet nunc. Integer in
        ligula ut tellus dignissim vulputate euismod a quam. Duis consectetur
        cursus turpis nec tincidunt. Praesent vel ipsum in ex facilisis aliquam
        vitae non quam.
      </p>
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
  text-align: center;
  align-items: center;
  height: 80%;
}

h2 {
  color: #b83ed7;
  font-weight: bold;
  font-size: 22px;
}

.abt {
  font-size: 15px;
  line-height: 25px;
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
