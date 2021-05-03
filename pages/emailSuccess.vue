<template>
  <div class="bg-area">
    <div @click="goBack">
      <p class="back">&#x3c; Back</p>
    </div>
    <div class="cont">
      <!-- <p class="title">{{ drugDetails.RegNo }}</p> -->
      <img src="~/assets/images/tick.png" class="tick" alt="" />

      <p class="highlight">Email Submitted Successfully</p>
      <p class="txt">
        Thank you for submitting your email You will recieve a confirmation
        mail.
        <a
          href="https://www.nafdac.gov.ng/about-nafdac/contact-nafdac/complaints-and-enquiries/"
          target="_blank"
          class="sk"
          >HERE</a
        >.
      </p>
      <NuxtLink to="/home">
        <button class="searchBtn" type="submit">Ok</button>
      </NuxtLink>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
.bg-area {
  height: 100vh;
  width: 100%;
  padding: 40px 30px;
  background: linear-gradient(180deg, #b83ed7 0%, #3e3fd7 100%);
  color: #fff;
}

.back {
  font-weight: bold;
  font-size: 13px;
  margin: 10% 5%;
}

img {
  max-width: 100%;
}

.cont {
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.txt {
  text-align: center;
  font-size: 13px;
  font-weight: bold;
}

.tick {
  margin-top: 20%;
  margin-bottom: 15%;
}

.highlight {
  font-weight: bolder;
  font-size: 20px;
  margin-bottom: 10%;
  text-align: center;
}

.searchBtn {
  background: #fff;
  border-radius: 10px;
  border: none;
  color: #b83ed7;
  padding: 13px 40px;
  font-weight: bold;
  font-size: 16px;
  margin-top: 30%;
}

.sk {
  color: #fff;
}
</style>
