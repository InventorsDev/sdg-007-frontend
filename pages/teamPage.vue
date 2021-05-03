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
      <div class="container">
        <div
          class="imgArea"
          v-for="teamMember in teamMembers"
          :key="teamMember.id"
          :style="{ backgroundImage: 'url(' + teamMember.Image + ')' }"
        >
          <div class="content">
            <p class="name">{{ teamMember.FullName }}</p>
            <p class="position">{{ teamMember.stack }}</p>
          </div>
        </div>
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
      teamMembers: [],
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
      const res = await fetch('https://dvapp.000webhostapp.com/developer.php')
      const data = await res.json()
      return data
    },
  },
  async created() {
    const data = await this.fetchTeamMembers()
    this.teamMembers = data.developers
    // console.log(this.teamMembers)
  },
}
</script>

<style scoped>
.bg {
  background-color: #e5e5e5;
  padding: 30px 25px;
  height: 100%;
  min-height: 100vh;
  /* position: fixed; */
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
  margin-top: 15%;
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
  margin: 7% 0 15%;
}

.imgArea {
  height: 264px;
  width: 264px;
  background-image: url('~assets/images/jo.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 15px;
  position: relative;
  margin-bottom: 10%;
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.63);
}

.imgArea:last-child {
  margin-bottom: 30%;
}

.imgArea .content {
  text-align: left;
  padding: 5px 20px;
  position: absolute;
  bottom: 0;
  background: #00000083;
  width: 100%;
  color: #fff;
  text-shadow: 2px 2px 5px #000;
  line-height: 20px;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}

.content .name {
  font-weight: bold;
}

.content .position {
  font-size: 14px;
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
