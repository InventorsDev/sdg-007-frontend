<template>
  <div class="bg">
    <div class="top">
      <img src="~/assets/images/logo.png" class="logo" alt="" />
      <div @click="toggleSideBar">
        <toggleIcon />
      </div>
    </div>
    <div class="content-center">
      <div class="info">
        <h2>Hi {{ myName }}!</h2>
        <p>How are you feeling today?</p>
      </div>
      <div class="banner">
        <p class="banner-text">
          Let’s help you <span>verify</span> your drugs before
          <span>usage</span>.
        </p>
        <img src="~/assets/images/doctor.png" class="banner-img" alt="" />
      </div>
      <form action="" class="form" @submit.prevent="fetchDrug">
        <div class="form-area">
          <input
            type="text"
            placeholder="Enter Nafdac - No"
            id="inputField"
            v-model="nafdacNo"
          />
        </div>
        <div class="btn-area">
          <button class="searchBtn" :disabled="isEmpty" type="submit">
            Submit
          </button>
        </div>
      </form>
    </div>
    <sideBar class="sidebar" />
  </div>
</template>

<script>
export default {
  layout: 'bottomBarLayout',
  data() {
    return {
      myName: '',
      nafdacNo: '',
      isEmpty: true,
      drugDetails: [],
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
    async fetchDrug() {
      this.$nextTick(() => {
        this.$nuxt.$loading.start()
        setTimeout(() => this.$nuxt.$loading.finish(), 2000)
      })

      this.drugDetails = await this.$axios.$get(
        'https://dvapp.000webhostapp.com/api.php?',
        {
          params: {
            reg: this.nafdacNo,
          },
        }
      )

      localStorage.setItem('drugsDetail', JSON.stringify(this.drugDetails))
      this.$router.push({ path: '/resultPage' })
    },
  },
  mounted() {
    if (localStorage.myName) {
      this.myName = localStorage.myName
    } else {
      this.myName = 'Anonymous'
    }
  },
  watch: {
    nafdacNo: function () {
      if (this.nafdacNo.length >= 5) {
        this.isEmpty = false
      } else {
        this.isEmpty = true
      }
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

.info h2 {
  background: -webkit-linear-gradient(180deg, #3e3fd7 0%, #b83ed7 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;
  font-size: 22px;
}

.info p {
  font-weight: 600;
  font-size: 16px;
  color: rgba(0, 0, 0, 0.7);
}

.content-center {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 80%;
}

.banner {
  display: flex;
  margin: 10% 0;
  align-items: center;
}

.banner-text {
  font-weight: bold;
  font-size: 22px;
  line-height: 35px;
  color: rgba(0, 0, 0, 0.7);
  width: 50%;
}

.banner-text span {
  color: #5c3fd7;
}

.banner-img {
  width: 50%;
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
