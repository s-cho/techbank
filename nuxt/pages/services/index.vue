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
   mounted() {
    this.index()
  },
  methods: {
    // -----API-----
    // 全件取得
    async index() {
      let res = await this.$axios.get('http://localhost:8000/api/services')
      this.items = res.data
    },
    // 新規作成
    store() {
      //
    },

    // 更新
    update() {
      //
    },

    // 削除
    async destroy(id) {
      await this.$axios.delete(`http://localhost:8000/api/services/$id`)
    }
  }
}
</script>

<style scoped>
</style>
