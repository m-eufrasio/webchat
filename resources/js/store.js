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
        async userStateAction({ commit }) {
            await axios.get('api/user/me').then((response) => {
                const userResponse = response.data.user;
                commit('serUserState', userResponse);

                // O ponto antes de SendMessage indica que eu não preciso usar todo o namespace dele
                Echo.private(`user.${userResponse.id}`).listen('.SendMessage', (e) => {

                    console.log('New message event received:', e); // Debug

                    if (this.userActive && this.userActive.id === e.message.from) {
                        this.messages.push(e.message);
                        this.scrollToBottom();
                    } else {
                        const user = this.users.find((u) => u.id === e.message.from);

                        if (user) {
                            user.notification = true;
                        }
                    }
                });
            });
        }
    },
    plugin: [ createPersistedState() ]
})
