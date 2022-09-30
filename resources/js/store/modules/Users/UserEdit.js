import {router} from "../../../routes/routes";

export default {
	namespaced: true,
	state:{
		//VueXState
        loading:true,
		data:null,
        departments:null,


	},
	getters:{
		//VueXGetters
		getDepartments(state){
			return state.departments;
		},

		getLoading(state){
			return state.loading;
		},
		getData(state){
			return state.data;
		},

	},
	mutations:{
		//VueXMutations
		setDepartments(state,value){
			state.departments = value;
		},

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
            axios.get(`/api/users/${id}`).then((resp)=>{
                commit("setData",resp.data.data);
                state.loading = false;
            }).catch((err)=>{
                state.loading = false;
                let resp = err.response;
                alert(resp.data.message);
            })
        },
        saveUser({state,commit},id){
            axios.post(`/api/users/${id}`,state.data).then((resp)=>{
                commit("setData",resp.data.data);
                router.push({name:"UserTable"})
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        },
        deleteUser({state,commit},id){
            axios.delete(`/api/users/${id}`).then((resp)=>{
                router.push({name:"UserTable"})
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        },
        fetchDep({state,commit}){
            axios.get(`/api/users/departments`).then((resp)=>{
                commit("setDepartments",resp.data.data);
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        }
	},
}


//...mapGetters({

	//}),
//...mapMutations({
	//'setDepartments':'UserEdit/setDepartments',
	//}),
