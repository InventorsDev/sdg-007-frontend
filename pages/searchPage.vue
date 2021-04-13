<template>
  <div class="bg">
    <div class="back" @click="goBack">
      <backIcon />
    </div>
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
              class="filled-input"
              id="inputField"
              v-model="nafdacNo"
            />
            <img
              src="~/assets/images/search-icon.png"
              class="search-icon"
              alt=""
            />
          </div>
          <div class="btn-area">
            <button class="searchBtn" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import loadingBar from '../components/loadingBar.vue'
export default {
  components: { loadingBar },
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
      if (this.nafdacNo == '') {
        let inputField = document.getElementById('inputField')
        inputField.classList.add('empty-input')
      } else {
        inputField.classList.remove('empty-input')

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
      }
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
.back {
  margin: 40px 0 20px 14px;
}
.top .info {
  margin: 50px 0 30px 14px;
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
  margin-bottom: 50px;
}

.banner img {
  border-radius: 10px;
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

  background-color: transparent;
  border-radius: 10px;
}

.filled-input {
  border: 1px solid #707070;
}

.empty-input {
  border: 2px solid red;
  animation: shake 0.5s 8 ease-in-out;
}

@keyframes shake {
  0% {
    transform: translateX(5px);
  }
  25% {
    transform: translateX(-5px);
  }
  50% {
    transform: translateX(5px);
  }
  75% {
    transform: translateX(-5px);
  }
  100% {
    transform: translateX(0px);
  }
}

.empty-input:focus {
  border: 1px solid #707070;
}

.form-area input:focus {
  outline: none;
}

.search-icon {
  position: absolute;
  top: 2px;
  right: 20px;
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
</style>
