<template>
  <div>
    <div class="input-group input-group-sm">
      <input
        type="text"
        class="form-control"
        v-model="filters.data.value"
        placeholder="Buscar permiso"
      />
      <div class="input-group-append">
        <div class="btn btn-primary">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </div>
    <v-table
      :data="permissions"
      :currentPage.sync="currentPage"
      :filters="filters"
      :pageSize="10"
      @totalPagesChanged="totalPages = $event"
      class="table table-striped table-valign-middle table-borderless mt-3 table-bordered"
    >
      <thead slot="head">
        <tr>
          <th>Nombre</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody slot="body" slot-scope="{ displayData }">
        <tr v-for="(row, index) in displayData" :key="index">
          <td scope="row">{{ row.name }}</td>
          <td>
            <button
              type="button"
              @click="$emit('show', row)"
              class="btn btn-flat btn-sm btn-warning"
            >
              <i class="fas fa-pencil-alt"></i>
            </button>
            <button type="button" @click="remove(row)" class="btn btn-flat btn-sm btn-danger">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </v-table>

    <!-- {{ currentUser.name }} -->
    <smart-pagination :currentPage.sync="currentPage" :totalPages="totalPages" />
  </div>
</template>
<script>
import { mapState, mapMutations, mapActions } from "vuex";

export default {
  data() {
    return {
      url: "permisos/",
      filters: {
        data: { value: "", keys: ["name"] }
      },
      currentPage: 1,
      totalPages: 0
    };
  },
  computed: {
    ...mapState(["permissions", "status"])
  },
  created() {
    this.getpermissions();
  },
  methods: {
    getpermissions() {
      this.$store.dispatch("ListPermissionA");
    },
    async remove(row) {
      let url = this.url + row.id;
      let response = await axios.delete(url);
      try {
        Vue.$toast.open({
          message: "La categoria ha sido eliminada"
        });
        this.getcategories();
      } catch (error) {
        console.log(error);
      }
    },
    async thestatus(row) {
      if (row.status == 1) {
        let url = this.url + "locked/" + row.id;
        let response = await axios.put(url);
      } else {
        let url = this.url + "available/" + row.id;
        let response = await axios.put(url);
      }
      this.getcategories();
    }
  }
};
</script>
