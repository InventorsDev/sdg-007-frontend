<template>
  <div class="container">
    <div class="cont">
      <p class="title">49-22493</p>
      <img src="~/assets/images/green tick.png" class="tick" alt="" />

      <div class="info">
        <p class="highlight">Successful!</p>
        <p>
          This drug is approved by NAFDAC with Nafdac-no 49-2345 and Brand name
          of IMASEUN LTD.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {}
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
