<template>
  <nav>
    <b-list-group>
      <b-list-group-item 
        v-for="item in links" 
        :key="item.index">
        <b-link 
          :to="item.link"
          :disabled="item.disabled"
          variant="primary">
          {{ item.title }}
        </b-link>
      </b-list-group-item>
    </b-list-group>
  </nav>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      links: [
        { title: 'HOME', link: '/' },
        { title: '社員マスタ', link: '/employees' },
        { title: 'サービスマスタ', link: '/services' },
        { title: 'スキルマスタ', link: '/skills' },
        { title: '資格マスタ', link: '/qualifications' },
        { title: '社員スキル', link: '/emps_skills' }
      ]
    }
  },
  methods: {}
}
</script>

<style scoped>
</style>
