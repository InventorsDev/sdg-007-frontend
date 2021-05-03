<template>
  <swiper ref="mySwiper" :options="swiperOptions">
    <swiper-slide>
      <div class="bg-area">
        <p class="skip">Skip >></p>
        <div class="center-content">
          <img
            src="~/assets/images/onboard1.png"
            class="onboardig-pic"
            alt=""
          />
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
            corrupti?
          </p>
          <div class="circles">
            <div class="circle unfill"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </swiper-slide>

    <swiper-slide>
      <div class="bg-area">
        <p class="skip">Skip >></p>
        <div class="center-content">
          <img
            src="~/assets/images/onboard2.png"
            class="onboardig-pic"
            alt=""
          />
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
            corrupti?
          </p>
          <div class="circles">
            <div class="circle"></div>
            <div class="circle unfill"></div>
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </swiper-slide>

    <swiper-slide>
      <div class="bg-area">
        <p class="title">Verify your Drugs</p>
        <div class="center-content">
          <img
            src="~/assets/images/onboard3.png"
            class="onboardig-pic"
            alt=""
          />
          <NuxtLink to="/">
            <button type="submit" class="btn">Get Started</button>
          </NuxtLink>
          <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle unfill"></div>
          </div>
        </div>
      </div>
    </swiper-slide>
    <div class="swiper-pagination" slot="pagination"></div>
  </swiper>
</template>

<script>
export default {
  name: 'carrousel',
  data() {
    return {
      swiperOptions: {
        pagination: {
          el: '.swiper-pagination',
        },
        // Some Swiper option/callback...
      },
    }
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.$swiper
    },
  },
  mounted() {
    console.log('Current Swiper instance object', this.swiper)
    this.swiper.slideTo(0, 1000, false)
  },
}
</script>

<style scoped>
.bg-area {
  height: 100vh;
  width: 100%;
  padding: 40px 30px;
  background: linear-gradient(180deg, #b83ed7 0%, #3e3fd7 100%);
}

.skip {
  text-align: right;
  color: #fff;
  font-weight: bold;
  font-size: 13px;
  margin-top: 10%;
}

.title {
  color: #fff;
  font-weight: 800;
  font-size: 35px;
  line-height: 40px;
  margin-top: 5%;
}

.onboardig-pic {
  margin: 20% 0;
}

.center-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  color: #fff;
}

.center-content .content {
  font-weight: bolder;
}

.btn {
  padding: 13px 18px;
  background-color: #fff;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  font-size: 17px;
  color: #3e3fd7;
}

.circles {
  margin-top: 10%;
  display: flex;
}

.circles .circle {
  width: 10px;
  height: 10px;
  background: #fff;
  border-radius: 50%;
  margin: 3px;
  border: 2px solid #fff;
}

.circles .unfill {
  background: transparent;
}
</style>
