import { defineStore } from "pinia";

export const useStore = defineStore({
    id:'authors',
    state:() =>({
        authors:[]
    }),
    actions:{
        async storeData(data){
            console.log(data);
        }
    }
})