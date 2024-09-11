// import Vue from 'vue'
import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

export default createStore({
    state: {
        user: {},
    },
    mutations: {
        serUserState(state, value) {
            console.log(value)
            state.user = value;
        }
    },
    actions: {
        userStateAction: ({ commit }) => {
            axios.get('api/user/me').then((response) => {
                const userResponse = response.data.user;
                commit('serUserState', userResponse);
            })
        }
    },
    plugin: [ createPersistedState() ]
})
