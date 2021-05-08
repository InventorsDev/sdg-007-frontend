<template>
  <div>
    <splashPage v-if="isLoading" />
    <onboarding v-if="firstTime" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLoading: true,
      firstTime: true,
    }
  },
  mounted() {
    setTimeout(() => {
      this.isLoading = false
      if (localStorage.myName) {
        console.log('not a new user!')
        this.firstTime = !this.firstTime
        this.$router.push({ path: '/intro' })
      }
    }, 2000)

    this.$nextTick(() => {
      this.$nuxt.$loading.start()
      setTimeout(() => this.$nuxt.$loading.finish(), 2000)
    })
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

.skip {
  color: rgba(0, 0, 0, 0.5);
  font-weight: bold;
  font-size: 13px;
}

.center-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: center;
  height: 80%;
}

.head-text {
  margin-bottom: -70px;
  color: rgba(0, 0, 0, 0.7);
  font-size: 20px;
  font-weight: bold;
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
