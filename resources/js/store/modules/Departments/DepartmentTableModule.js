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
        fetch({state,commit,dispatch}){
            state.loading = true;
            axios.get("/api/departments").then((resp)=>{
                commit("setData",resp.data.data);
                state.loading = false;
            }).catch((err)=>{
                let resp = err.response;
                alert(resp.data.message);
            })
        }
	},
}

