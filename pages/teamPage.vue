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
      <h2>Our Team</h2>
      <span class="line"></span>

      <div class="overall-container">
        <swiper ref="mySwiper" :options="swiperOptions">
          <swiper-slide>
            <div class="container"></div>
            <div class="img-container"></div>
          </swiper-slide>

          <swiper-slide>
            <div class="container"></div>
            <div class="img-container"></div>
          </swiper-slide>

          <swiper-slide>
            <div class="container"></div>
            <div class="img-container"></div>
          </swiper-slide>
        </swiper>
      </div>
    </div>
    <sideBar class="sidebar" />
  </div>
</template>

<script>
export default {
  layout: 'bottomBarLayout',

  data() {
    return {
      swiperOptions: {
        pagination: {
          el: '.swiper-pagination',
        },
        // Some Swiper option/callback...
      },
    }
  },
  methods: {
    goBack() {
      this.$router.back()
    },
    toggleSideBar() {
      let sideBar = document.querySelector('.sidebar')
      sideBar.classList.toggle('show')
    },
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.$swiper
    },
  },
  mounted() {
    console.log('Current Swiper instance object', this.swiper)
    this.swiper.slideTo(0, 1000, false)
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

.line {
  width: 45px;
  height: 8px;
  border-radius: 10px;
  background: linear-gradient(180deg, #b83ed7 0%, #3e3fd7 100%);
  margin: 7% 0 25%;
}

.overall-container {
  position: relative;
  width: 100%;
  height: 40%;
}

.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 95%;
  height: 200px;
  background: #c4c4c4;
  opacity: 0.6;
  border-radius: 15px;
}

.img-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 234px;
  height: 234px;
  background: url('~/assets/images/jo.jpg') center no-repeat;
  background-size: cover;
  border-radius: 15px;
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
