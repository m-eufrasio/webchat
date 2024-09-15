// import Vue from 'vue'
import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

export default createStore({
    state: {
        user: {},
    },
    mutations: {
        serUserState(state, value) {
            state.user = value;
        }
    },
    actions: {
        async userStateAction({ commit }) {
            const response = await axios.get('api/user/me');
            const userResponse = response.data.user;
            commit('serUserState', userResponse);
        }
    },
    plugin: [ createPersistedState() ]
})
