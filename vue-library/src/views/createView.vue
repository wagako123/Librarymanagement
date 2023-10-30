<template>
    <div>
        <div class="bg-dark">
      <v-container class="p-4">
        <h2 class="text-center text-white">Vue (pinia) crud</h2>
      </v-container>
    </div>
        <CreateAuthor/>
    </div>
</template>
<script>
import CreateAuthor from '@/components/createAuthor.vue';

export default{
    name:'CreateView',
    components:{
    CreateAuthor,
  }
}
</script>