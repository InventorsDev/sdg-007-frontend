<template>
  <div class="container">
    <div class="cont">
      <p class="title">{{ drugDetails.RegNo }}</p>
      <img src="~/assets/images/green tick.png" class="tick" alt="" />

      <div class="info">
        <p class="highlight">Successful!</p>
        <p>
          This drug is approved by NAFDAC with Nafdac-no
          {{ drugDetails.RegNo }} and Brand name of {{ drugDetails.Brand }}.
        </p>
      </div>
    </div>
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
.container {
  widows: 100%;
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

p {
  text-align: center;
  font-size: 13px;
  font-weight: bold;
}

.title {
  font-weight: bolder;
  font-size: 23px;
  margin-bottom: 40px;
}

.tick {
  margin-bottom: 30px;
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
  margin-bottom: 20px;
}

@media (min-height: 700px) {
  .title {
    margin-bottom: 90px;
  }

  .tick {
    margin-bottom: 80px;
  }

  .highlight {
    margin-bottom: 30px;
  }
}
</style>
