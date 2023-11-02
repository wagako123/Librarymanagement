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
                            <v-text-field label="Enter the book's title" v-model="book">

                            </v-text-field>
                            <v-text-field label="Enter the book's tags" v-model="tags">

                            </v-text-field>
                            <v-btn type="submit" justify="center" width=100% color="primary" class="my-3">Submit</v-btn>
                            </form>
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script lang="ts">

import {mapActions} from 'pinia';
import {useStore} from '@/stores';

export default{
    name:"CreateAuthor",
    data:()=>({
        name:'',
        book:'',
        tags:'',
    }),
    methods:{
        ...mapActions(useStore,['storeData']),
        store(){
            const data={
                name:this.name,
                book:this.book,
                tags:this.tag,
            };
            this.storeData(data);
        }
    }
}
</script>