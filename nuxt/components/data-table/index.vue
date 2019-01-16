<template>
  <b-table 
    :items="items" 
    :fields="fields" 
    :current-page="currentPage" 
    :per-page="perPage"
    :show-empty="showEmpty"
    :filter="filter"
    striped
    bordered
    small
    hover
    class="custom-table"
    empty-text="表示するデータがありません"
    empty-filtered-text="該当するデータがありません"
    tbody-class="custom-tbody"
    tbody-tr-class="custom-tr"
    tbody-td-class="custom-td"
    @filtered="onFiltered"
  >
    <template 
      slot="action" 
      slot-scope="row">
      <div class="action">
        <b-button-group size="sm">
          <!-- <b-button variant="outline-success"><font-awesome-icon icon="file" class="mr-1"/>詳細</b-button> -->
          <b-button
            variant="outline-success"><font-awesome-icon 
              icon="edit" 
              class="mr-1"/></b-button>
          <b-button 
            variant="outline-success" 
            @click="destroy(row.item.id)"><font-awesome-icon 
              icon="trash" 
              class="mr-1"/></b-button>
        </b-button-group>
      </div>
    </template>
  </b-table>
</template>

<script>
export default {
  components: {},
  props: {
    items: {
      type: Array,
      default: () => [
        { id: 1, item1: 40, item2: 'aaaa', item3: 'ああああ' },
        { id: 2, item1: 242, item2: 'bbbb', item3: 'かかかか' },
        { id: 3, item1: 4240, item2: 'cccc', item3: 'ささささ' }
      ]
    },
    fields: {
      type: Object,
      default: () => [
        {
          id: {
            label: 'id',
            sortable: true
          },
          item1: {
            label: 'item1',
            sortable: true
          },
          item2: {
            label: 'item2',
            sortable: true
          },
          item3: {
            label: 'item3',
            sortable: true
          },
          action: {
            label: 'アクション',
            tdClass: 'td-action'
          }
        }
      ]
    }
  },
  data() {
    return {
      currentPage: 1,
      perPage: 20,
      showEmpty: true,
      filter: null,
      totalRows: 0,
      limit: 10
    }
  },
  methods: {
    // フィルター
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length
      this.currentPage = 1
    },

    destroy(id) {
      alert(id)
    }
  }
}
</script>

<style >
.table {
  font-size: 0.9rem;
}
.custom-tr:hover .action {
  visibility: visible;
}
.td-action {
  /* width: 150px; */
  /* padding: 0 !important; */
}
.td-action button {
  /* border: none;
  border-radius: 0px !important; */
}
</style>
