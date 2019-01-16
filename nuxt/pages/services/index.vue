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
        service_code: {
          label: 'サービスコード',
          sortable: true
        },
        service_name: {
          label: 'サービス名',
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
