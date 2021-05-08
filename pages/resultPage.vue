<template>
  <div class="bg">
    <div @click="goBack">
      <p class="back">&#x3c; Back</p>
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
      // console.log(this.drugDetails)
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
  color: rgba(0, 0, 0, 0.5);
  font-weight: bold;
  font-size: 13px;
  margin: 10% 5%;
}
</style>
