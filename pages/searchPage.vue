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
        <form action="">
          <div class="form-area">
            <input type="text" placeholder="Enter Nafdac - No" />
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
      <NuxtLink to="/">
        <button type="submit">Go Back</button>
      </NuxtLink>
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
