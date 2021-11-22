<template>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>

        <nav class="my-2 my-md-0 mr-md-3">
            <router-link to="/profile" class="p-2 text-white">{{user?.name}}</router-link>
            <a class="nav-link px-3" href="javascript:void(0)" @click="logout">Sign out</a>
        </nav>
    </header>
</template>

<script>
import router from '@/router';
import { useStore } from 'vuex';
import { computed } from '@vue/reactivity';

export default {
    name: "Nav",
    setup() {
        const store = useStore();

        const user = computed(() => store.state.User.user);

        const logout = () => {
            localStorage.clear();
            router.push({ path: '/login' })
        }

        return {
            logout,
            user
        }
    }
}
</script>