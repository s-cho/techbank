<template>
  <div>
    <DataTable
      :items="items"
      :fields="fields"/>
  </div>
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
        emp_id: {
          label: '社員番号',
          sortable: true
        },
        emp_name: {
          label: '社員氏名',
          sortable: true
        },
        gender: {
          label: '性別',
          sortable: true
        },
        email: {
          label: 'E-MAIL',
          sortable: true
        },
        address: {
          label: '住所',
          sortable: true
        },
        service_code: {
          label: 'サービスコード',
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
      let res = await this.$axios.get('http://localhost:8000/api/employees')
      this.items = res.data
    }
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
    await this.$axios.delete(`http://localhost:8000/api/employees/$id`)
  }
}
</script>

<style scoped>
</style>
