<template>
  <div class="bg">
    <div class="top">
      <div class="info">
        <h2>Hi {{ myName }}!</h2>
        <p>How are you feeling today?</p>
      </div>
      <div class="banner">
        <img src="~/assets/images/banner.jpg" width="320px" alt="" />
      </div>
      <div class="form">
        <form action="" @submit.prevent="fetchDrug">
          <div class="form-area">
            <input
              type="text"
              placeholder="Enter Nafdac - No"
              v-model="nafdacNo"
            />
            <img
              src="~/assets/images/search-icon.png"
              class="search-icon"
              alt=""
            />
          </div>
        </form>
      </div>
    </div>

    <div class="btn">
      <button type="submit" @click="goBack">Go Back</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      myName: '',
      nafdacNo: '',
      drugDetails: [],
    }
  },
  methods: {
    goBack() {
      this.$router.back()
    },
    async fetchDrug() {
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
}
</script>

<style scoped>
.bg {
  padding: 10px;
}

.top .info {
  margin: 50px 0 30px 12px;
}

.top .info h2 {
  font-size: 20px;
}

.top .info p {
  font-weight: bold;
  color: #2165c6;
  font-size: 15px;
}

.banner {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
}

.form-area {
  position: relative;
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

.search-icon {
  position: absolute;
  top: 2px;
  right: 20px;
}

.btn {
  margin-top: 170px;
  width: 100%;
  display: flex;
  justify-content: center;
}

.btn button {
  padding: 5px 20px;
  border-radius: 20px;
  outline: none;
  border: 1px solid #707070;
  color: #7b7b7b;
}
</style>
