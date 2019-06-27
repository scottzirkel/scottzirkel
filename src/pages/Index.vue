<template>
  <Layout>
    <logo class="mx-auto w-2/3 sm:w-1/3"></logo>
  </Layout>
</template>

<script>
import Logo from '../assets/svgs/Logo.svg'
export default {
  components: {
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
