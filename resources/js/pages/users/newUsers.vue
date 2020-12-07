<template>
  <div class="container mt-5 mx-auto rounded">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-secondary text-center mt-3 mb-3">New User</h4>
        <form>
          <div class="mt-3 mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" />
          </div>
          <div class="mt-3 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" />
          </div>
          <div class="mt-3 mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control"></textarea>
          </div>
          <button
            type="submit"
            class="btn btn-info text-light float-right"
            @click="addUser()"
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
  methods: {
    addUser () {
      axios({
        methods: 'POST',
        url: '/api/users/',
        data : {
          name : 'heloo',
          age : 'abc',
        },
      });
      console.log(data);
    },
  },
}
</script>