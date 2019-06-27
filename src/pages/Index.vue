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
    title: 'Scott Zirkel',
    description: 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.'
  },
  data () {
    return {
      loading: true
    }
  }
}
</script>
