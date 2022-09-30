import {router} from "../../../routes/routes";

export default {
	namespaced: true,
	state:{
		//VueXState
        loading:true,
		data:null,

	},
	getters:{
		//VueXGetters
		getLoading(state){
			return state.loading;
		},
		getData(state){
			return state.data;
		},

	},
	mutations:{
		//VueXMutations
		setLoading(state,value){
			state.loading = value;
		},
		setData(state,value){
			state.data = value;
		},

	},
	actions:{
		//VueXActions
        fetch({state,commit},id){
            state.loading = true;
            axios.get(`/api/departments/${id}`).then((resp)=>{
                commit("setData",resp.data.data);
                state.loading = false;
            }).catch((err)=>{
                state.loading = false;
                let resp = err.response;
                alert(resp.data.message);
            })
        },
        saveDep({state,commit},id){
            axios.post(`/api/departments/${id}`,state.data).then((resp)=>{
                commit("setData",resp.data.data);
                router.push({name:"DepartmentsTable"})
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        },
        delDep({state,commit},id){
            axios.delete(`/api/departments/${id}`).then((resp)=>{
                router.push({name:"DepartmentsTable"})
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        }
	},
}

