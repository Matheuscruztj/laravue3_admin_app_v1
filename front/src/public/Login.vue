<template>
  <main class="w-100">
    <form class="form-signin" @submit.prevent="submit">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email address" required v-model="email">

      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" required v-model="password">

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
  </main>
</template>

<script>
import axios from 'axios';
import router from '@/router';

export default {
  name: "Login",
  data() {
      return {
          email: '',
          password: '',
      }
  },
  methods: {
    submit: function() {
      axios.post('login', {
        email: this.email,
        password: this.password,
      })
      .then(
        async function(response) {
          localStorage.setItem('token', response.data.token);

          axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;

          await router.push({ path: '/' })
        }
      )
      .catch(err => {
        console.log(err);
      });
    }
  }
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