<template>
  <DataTable
    :items="items"
    :fields="fields"/>
</template>

<script>
import DataTable from '@/components/data-table'
export default {
  components: {
    DataTable
  },
  data() {
    return {
      fields: {
        skill_code: {
          label: 'スキルコード',
          sortable: true
        },
        skill_class: {
          label: 'スキル種類',
          sortable: true
        },
        skill_name: {
          label: 'スキル名',
          sortable: true
        },
        action: {
          label: 'アクション',
          tdClass: 'td-action'
        }
      },
      items: []
    }
  },
  methods: {}
}
</script>

<style scoped>
</style>
