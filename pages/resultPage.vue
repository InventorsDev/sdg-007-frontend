<template>
  <div class="bg">
    <div class="back" @click="goBack">
      <backIcon />
    </div>
    <div class="content" v-if="this.drugDetails.Status === 'fail'">
      <failurePage />
    </div>
    <div class="content" v-else-if="this.drugDetails.Status === 'success'">
      <successPage />
    </div>
  </div>
</template>

<script>
import successPage from '../components/successPage.vue'
export default {
  components: { successPage },
  data() {
    return {
      drugDetails: '',
    }
  },
  methods: {
    goBack() {
      this.$router.back()
    },
  },
  mounted() {
    if (localStorage.drugsDetail) {
      this.drugDetails = JSON.parse(localStorage.getItem('drugsDetail'))
      console.log(this.drugDetails)
    } else {
      console.log('nothing')
    }
  },
}
</script>

<style scoped>
.bg {
  padding: 10px;
}

.back {
  margin: 40px 0 20px 30px;
}
</style>
