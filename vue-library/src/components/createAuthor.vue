<template>
    <div>
        <v-container>
            <v-row justify="center">
                <v-col xl="4" lg="4" md="6" sm="12"> 
                    <router-link to="/">
                        <v-btn color="secondary" class="my-3">
                            Go back
                        </v-btn>
                    </router-link>
                    <v-card class="my-3">
                        <v-card-title> Insert Books</v-card-title>
                        <v-card-subtitle>
                            <form @submit.prevent="store()">
                            <v-text-field label="Enter the author's name" v-model="name">

                            </v-text-field>
                            <v-text-field label="Enter the book's title" v-model="books">

                            </v-text-field>
                            
                            <v-btn type="submit" justify="center" width=100% color="primary" class="my-3">
                                {{ isloading ? "Saving": "Save" }}
                            </v-btn>
                            </form>
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script lang="ts">

import {mapActions, mapState} from 'pinia';
import {useStore} from '@/stores';

export default{
    name:"CreateAuthor",
    data:()=>({
        name:'',
        books:'',
      
    }),
    computed: {
    ...mapState(useStore, ["isloading"]),
  },
    methods:{
        ...mapActions(useStore,['storeData']),
        store(){
            const data={
                name:this.name,
                books:this.books,
               
            };
            this.storeData(data);
        }
    }
}
</script>