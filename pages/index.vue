<template>
  <div>
    <splashPage v-if="isLoading" />
    <div class="bg" v-if="!isLoading">
      <div class="top">
        <h1>Hello!</h1>
        <p>Can I know your name?</p>
        <span>Note, we are not storing your name in any database</span>
      </div>
      <form class="form" @submit.prevent="showName">
        <input type="text" v-model="myName" placeholder="Name (optional)" />
      </form>
      <div class="btn">
        <NuxtLink to="/searchPage">
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
  },
  methods: {
    showName() {
      localStorage.myName = this.myName
      this.myName = ''
      this.$router.push({ path: '/searchPage' })
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
  margin-bottom: 150px;
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

.form input {
  width: 300px;
  padding: 10px;
  border: none;
  border-bottom: 1px solid #707070;
  background-color: transparent;
}

.form input:focus {
  outline: none;
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
