<template>
  <div class="container">
    <div class="cont">
      <p class="title">49-22493</p>
      <img src="~/assets/images/fail-tick.png" class="tick" alt="" />

      <div class="info">
        <p class="highlight">Oops!</p>
        <p>
          This drug is not approved by NAFDAC and we strongly advice you not to
          make use of this drug.
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
  margin-left: 35px;
}

.highlight {
  color: #e51514;
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
