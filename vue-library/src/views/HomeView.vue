

<template>
  <div>
   
    <v-container >
     
        <v-card class="my-3">
          <div class="d-flex justify-space-between">
          <v-card-title>Authors(0)</v-card-title>
          <router-link to="/create">
            <v-btn  color="success" class="my-3">New</v-btn>
          </router-link>
        </div>

        </v-card>
    </v-container>
  </div>
</template>

<script>
import CreateAuthor from '@/components/createAuthor.vue';

export default{
  name:"HomeVue",
  components:{
    CreateAuthor,
  }
};
</script>

<style>
.bg-dark{
  background-color: black;
}
</style>
