<template>
  <div class="bg">
    <div class="back" @click="goBack">
      <backIcon />
    </div>
    <div class="top">
      <div class="info">
        <h2>Team</h2>
        <p>Meet the team!</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: 'bottomBarLayout',
  methods: {
    goBack() {
      this.$router.back()
    },
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
</style>
