<template>
  <div class="bg">
    <div class="top">
      <img src="~/assets/images/logo.png" class="logo" alt="" />
      <NuxtLink to="/home" class="sk">
        <p class="skip">Skip >></p>
      </NuxtLink>
    </div>

    <p class="head-text">Hi there,</p>
    <div class="center-content">
      <img src="~/assets/images/illustration-intro.png" alt="" />
      <p>Can I know your name?</p>
      <form action="" class="form" @submit.prevent="showName">
        <div class="form-area">
          <input type="text" placeholder="Name (optional)" v-model="myName" />
        </div>
        <div class="btn-area">
          <button class="searchBtn" type="submit">Submit</button>
        </div>
      </form>
      <p class="sm">*Note, we are not storing your name in any database</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      myName: '',
    }
  },
  mounted() {
    if (localStorage.myName) {
      this.myName = localStorage.myName
    } else {
      localStorage.myName = 'Anonymous'
    }
  },
  methods: {
    showName() {
      if (this.myName !== '') {
        localStorage.myName = this.myName
      } else {
        localStorage.myName = 'Anonymous'
      }
      this.myName = ''
      this.$router.push({ path: '/home' })
    },
  },
}
</script>

<style scoped>
.bg {
  background-color: #fbfbfb;
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

.sk {
  text-decoration: none;
}

.skip {
  color: rgba(0, 0, 0, 0.5);
  font-weight: bold;
  font-size: 13px;
}

.head-text {
  margin-bottom: -70px;
  color: rgba(0, 0, 0, 0.7);
  font-size: 20px;
  font-weight: bold;
  position: absolute;
  top: 20%;
}

.center-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: center;
  height: 80%;
}

p {
  font-weight: 600;
  font-size: 12px;
  color: rgba(0, 0, 0, 0.7);
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

.sm {
  font-size: 10px;
  position: absolute;
  bottom: 5%;
  left: 0;
  text-align: center;
  width: 100%;
}
</style>
