<template>
  <div>
    <splashPage v-if="isLoading" />
    <div class="bg" v-if="!isLoading">
      <div class="top">
        <h1>Hello!</h1>
        <p>Can I know your name?</p>
        <span>Note, we are not storing your name in any database</span>
      </div>
      <form action="" class="form" @submit.prevent="showName">
        <div class="form-area">
          <input type="text" placeholder="Name (optional)" v-model="myName" />
        </div>
        <div class="btn-area">
          <button class="searchBtn" type="submit">Submit</button>
        </div>
      </form>
      <div class="btn">
        <NuxtLink to="/home">
          <button type="submit">Skip</button>
        </NuxtLink>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      myName: '',
      isLoading: true,
    }
  },
  mounted() {
    if (localStorage.myName) {
      this.myName = localStorage.myName
    }
    setTimeout(() => {
      this.isLoading = false
    }, 3000)

    this.$nextTick(() => {
      this.$nuxt.$loading.start()
      setTimeout(() => this.$nuxt.$loading.finish(), 3000)
    })
  },
  methods: {
    showName() {
      localStorage.myName = this.myName
      this.myName = ''
      this.$router.push({ path: '/home' })
    },
  },
}
</script>

<style scoped>
.bg {
  display: flex;
  flex-direction: column;
  text-align: center;
  justify-content: center;
  align-items: center;
}

.top {
  margin-bottom: 130px;
}
.top h1 {
  font-weight: bolder;
}
.top p {
  font-weight: bold;
}
.top span {
  font-size: 12px;
  font-weight: bold;
  color: rgb(104, 103, 103);
}

.form-area {
  width: 100%;
  display: flex;
  justify-content: center;
}

.form-area input {
  width: 320px;
  padding: 13px 10px;
  border: 1px solid #707070;
  background-color: transparent;
  border-radius: 10px;
}

.form-area input:focus {
  outline: none;
}

.btn-area {
  margin-top: 20px;
  width: 100%;
  display: flex;
  justify-content: center;
}

.searchBtn {
  background-color: #2165c6;
  border: none;
  border-radius: 5px;
  color: #fff;
  padding: 12px 20px;
}

.btn {
  margin-top: 120px;
}

.btn button {
  padding: 5px 20px;
  border-radius: 20px;
  outline: none;
  border: 1px solid #707070;
  color: #7b7b7b;
}
</style>
