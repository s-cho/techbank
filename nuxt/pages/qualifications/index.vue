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
        qualification_code: {
          label: '資格コード',
          sortable: true
        },
        qualification_name: {
          label: '資格名',
          sortable: true
        },
        itss_level: {
          label: 'ITSSレベル',
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
