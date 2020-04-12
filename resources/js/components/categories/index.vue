<template>
  <div class="card">
    <div class="card-header border-0">
      <Add-Categorie ref="form_categorie"></Add-Categorie>
    </div>
    <div class="card-body">
      <List-Categorie v-on:show="show"></List-Categorie>
    </div>
  </div>
</template>
<script>
import ListCategorie from "./list";
import AddCategorie from "./add";
export default {
  components: {
    ListCategorie,
    AddCategorie
  },
  methods: {
    show(row) {
      this.$refs.form_categorie.show(row);
    }
  }
};
</script>
