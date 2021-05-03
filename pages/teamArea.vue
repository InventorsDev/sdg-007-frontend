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
      <swiper ref="mySwiper" :options="swiperOptions">
        <swiper-slide v-for="teamMember in teamMembers" :key="teamMember.id">
          <div
            class="inner"
            :style="{ backgroundImage: 'url(' + teamMember.Image + ')' }"
          >
            <div class="content">
              <p class="name">{{ teamMember.FullName }}</p>
              <p class="position">{{ teamMember.stack }}</p>
            </div>
          </div>
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
      </swiper>
    </div>
    <sideBar class="sidebar" />
  </div>
</template>

<script>
export default {
  layout: 'bottomBarLayout',
  data() {
    return {
      teamMembers: [],
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
    async fetchTeamMembers() {
      const res = await fetch('http://dvapp.000webhostapp.com/developer.php')
      const data = await res.json()
      return data
    },
  },
  async created() {
    const data = await this.fetchTeamMembers()
    this.teamMembers = data
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
  background: -webkit-linear-gradient(180deg, #3e3fd7 0%, #b83ed7 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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

.inner {
  width: 264px;
  height: 264px;
  background: #c4c4c4;
  border-radius: 15px;
  /* background-image: url('~/assets/images/jo.jpg'); */
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}

.content {
  text-align: left;
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: #000000;
  opacity: 0.6;
  padding: 5px 20px;
  color: #fff;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}

.name {
  font-weight: bold;
}

.position {
  font-size: 14px;
}

.name,
.position {
  text-shadow: 2px 2px 4px #000000;
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
