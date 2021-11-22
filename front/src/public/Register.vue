<template>
    <main class="w-100">
      <form class="form-signin" @submit.prevent="submit">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <label for="first_name" class="sr-only">First Name</label>
        <input type="text" class="form-control" id="first_name" placeholder="First Name" required v-model="firstName">

        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" placeholder="Last Name" required v-model="lastName">

        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email address" required v-model="email">

        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required v-model="password">

        <label for="passwordConfirm">Password Confirm</label>
        <input type="password" class="form-control" id="passwordConfirm" placeholder="Password" required v-model="passwordConfirm">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
    </main>
</template>

<script>
import axios from 'axios';
import router from '@/router';

export default {
    name: "Register",
    data() {
        return {
            firstName: '',
            lastName: '',
            email: '',
            password: '',
            passwordConfirm: '',
        }
    },
    methods: {
      submit: function() {
          axios.post('register', {
            first_name: this.firstName,
            last_name: this.lastName,
            email: this.email,
            password: this.password,
            password_confirm: this.passwordConfirm
          })
          .then(
            function() {
              router.push({ path: '/login' })
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