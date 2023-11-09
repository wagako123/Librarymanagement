import { defineStore } from "pinia";
import axios from 'axios';
import router from '@/router';



export const useStore = defineStore({
    id:'authors',
    state:() =>({
        authors:[],
        isloading: false,
    }),
    actions:{
        async storeData(data){
            this.isloading=true;
            console.log(data);
            // const res= await (await fetch("http://127.0.0.1:8000/api/Authors",{
            //     method:'POST',
            //     body:JSON.stringify(data),
            // }
            // )).json();

            const res= await axios.post ("http://127.0.0.1:8000/api/Authors", data)
            if (res.data.success){
                alert(res.data.message)
                this.isloading= false,
                router.push('/')
                data.name = '';
                data.books='';
            }else{
                alert(res.data.message)
            }
        }
    }
})