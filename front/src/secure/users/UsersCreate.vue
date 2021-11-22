<template>
    <main class="w-100">
      <form class="form-signin" @submit.prevent="submit">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required v-model="firstName">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required v-model="lastName">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required v-model="email">
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role_id" class="form-control" v-model="roleId">
                <option value="0">Select Role</option>
                <option v-for="role in roles" :key="role.id" :value="role.id">
                    {{role.name}}
                </option>
            </select>
        </div>

        <div class="mt-4">
          <button class="btn btn-outline-secondary">Save</button>
        </div>
      </form>
    </main>
</template>

<script>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import router from '@/router';

export default {
    name: "UsersCreate",
    setup() {
        const firstName = ref('');
        const lastName = ref('');
        const email = ref('');
        let roleId = ref(0);
        const roles = ref([]);

        onMounted(async () => {
            const response = await axios.get('roles');

            roles.value = response.data.data;
        });

        const submit = async () => {
            await axios.post('users', {
                first_name: firstName.value,
                last_name: lastName.value,
                email: email.value,
                role_id: roleId.value
            });

            await router.push('/users');
        }

        return {
            firstName,
            lastName,
            email,
            roleId,
            roles,
            submit
        }
    },
}
</script>

<style scoped>
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
</style>