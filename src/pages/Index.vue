<template>
  <Layout>
    <avatar class="my-12 mx-auto w-1/2 sm:hidden"></avatar>
    <logo class="mx-auto w-1/3 hidden sm:block"></logo>
  </Layout>
</template>

<script>
import Avatar from '../assets/svgs/Avatar.svg'
import Logo from '../assets/svgs/Logo.svg'
export default {
  components: {
    Avatar,
    Logo
  },
  metaInfo: {
    title: 'Scott Zirkel'
  },
  data () {
    return {
      loading: true
    }
  }
}
</script>
