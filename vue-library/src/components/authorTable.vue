<template>
    <div>
        <v-container class="my-3">
            {{ authors }}
            <div v-if="isloading">Loading.....</div>
           
      <div v-else>
        <table style="width: 100%">
          <thead>
            <tr style="width: 100%">
              <th class="text-left">Name</th>
              <th class="text-left">Book title</th>
              <th class="text-left">Tag</th>
              <th class="text-left">Edit</th>
              <th class="text-left">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr
              style="width: 100%"
              v-for="(author, index) in authors"
              :key="index"
            >
              <td class="text-left pa-3">{{ index + 1 }}</td>
              <td class="text-left pa-3">{{ author.name }}</td>
              <td class="text-left pa-3">{{ author.books }}</td>
             
              <td class="text-left pa-3">
                <router-link :to="`/update/${author.id}`">
                  <v-btn color="success" text>Edit</v-btn></router-link
                >
              </td>
              <td class="text-left">
                <v-btn color="error" text @click="deletedata(authors.id)"
                  >Delete</v-btn
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
        </v-container>
    </div>

</template>

<script lang="ts">

import {mapActions, mapState} from 'pinia';
import {useStore} from '@/stores';

export default {
    name: "tableComp",
    computed: {
    ...mapState(useStore, ["authors", "isloading"]),
  },
    methods:{
        ...mapActions(useStore, ["getData", ])
    },
    mounted(){
        this.getData();
    }

}
</script>

<style>

</style>