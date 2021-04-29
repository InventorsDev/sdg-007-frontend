<template>
  <div class="cont">
    <!-- <p class="title">{{ drugDetails.RegNo }}</p> -->
    <img src="~/assets/images/green tick.png" class="tick" alt="" />

    <p class="highlight">Drug Approved!</p>
    <p>
      This drug is approved by NAFDAC with Nafdac-no
      {{ drugDetails.RegNo }} and Brand name of <br />
      {{ drugDetails.Brand }}.
    </p>
    <NuxtLink to="/home">
      <button class="searchBtn" type="submit">Ok</button>
    </NuxtLink>
  </div>
</template>

<script>
export default {
  props: {
    drugDetails: Object,
  },
}
</script>

<style scoped>
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

p {
  text-align: center;
  font-size: 13px;
  font-weight: bold;
}

/* .title {
  font-weight: bolder;
  font-size: 23px;
  margin-bottom: 20%;
} */

.tick {
  margin-top: 20%;
  margin-bottom: 15%;
  margin-left: -25px;
  animation: animate 3s infinite ease-in-out;
}

@keyframes animate {
  0% {
    transform: scale(0.9);
  }
  25% {
    transform: scale(1);
    transform: rotate(100deg);
  }
  50% {
    transform: scale(1.1);
  }
  75% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.9);
    transform: rotate(100deg);
  }
}

.highlight {
  color: #2eac0b;
  font-weight: bolder;
  font-size: 20px;
  margin-bottom: 10%;
}

.searchBtn {
  background: linear-gradient(180deg, #3e3fd7 0%, #b83ed7 100%);
  border-radius: 10px;
  border: none;
  color: #fff;
  padding: 13px 40px;
  font-weight: bold;
  font-size: 16px;
  margin-top: 30%;
}
</style>
