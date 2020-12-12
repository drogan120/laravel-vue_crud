<template>
  <div class="container mt-5 mx-auto rounded">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-secondary text-center mt-3 mb-3">New User</h4>
        <form v-on:submit.prevent>
          <div class="mt-3 mb-3">
            <label for="name" class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              name="name"
              v-model="user.name"
            />
          </div>
          <div class="mt-3 mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name="email"
              v-model="user.email"
            />
          </div>
          <div class="mt-3 mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea
              name="address"
              class="form-control"
              v-model="user.address"
            ></textarea>
          </div>
          <button
            type="submit"
            class="btn btn-info text-light float-right"
            @click="addUser"
          >
            Save
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      user: {},
    }
  },
  methods: {
    async addUser () {
      console.log(this.user);
      await axios.post('/api/users',this.user)
      .then(res => alert('data has been added'))
      .catch(err => console.log(err))
    },
  },
}
</script>