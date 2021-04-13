<template>
  <div class="bg">
    <div class="back" @click="goBack">
      <backIcon />
    </div>
    <div class="content">
      <div v-if="drugDetails.Status === 'success'">
        <successPage :drugDetails="drugDetails" />
      </div>
      <div v-else-if="drugDetails.Status === 'fail'">
        <failurePage :drugDetails="drugDetails" />
      </div>
      <div v-else>
        <errorPage />
      </div>
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
