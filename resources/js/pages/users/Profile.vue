<template>
  <div class="container mx-auto mt-5 rounded">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-secondary text-center mt-3 mb-3">Users List</h4>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <tr v-if="id">
              <td>*</td>
              <td>{{ user.name }}</td>
              <td>{{ user.email }}</td>
              <td>{{ user.address }}</td>
            </tr>
          </tbody>
        </table>

        <div class="mt-5">
          <h4 class="text-secondary">Update data</h4>
          <form v-on:submit.prevent>
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                v-model="dataUpdate.name"
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                v-model="dataUpdate.email"
              />
            </div>
            <div class="form-group">
              <label for="address">Addrees</label>
              <textarea
                name="address"
                class="form-control"
                v-model="dataUpdate.address"
                >{{ user.address }}</textarea
              >
            </div>
            <button
              type="submit"
              class="btn btn-info text-white"
              @click="updateUser(user.id)"
            >
              Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['id'],
  data () {
    return {
      dataUpdate: {},
      user: [],
    }
  },
  mounted () {
    this.showUsers()
  },
  methods: {
    async showUsers () {
      await axios.get(`/api/users/${this.id}`)
        .then(result => {
          this.user = result.data
          console.log(result.data)
        })
        .catch((err) => { console.log(err) })
    },
    async updateUser (id) {
      await console.log(this.dataUpdate)
      await axios.put(`/api/users/${id}`, this.dataUpdate)
        .then(res => { alert('data has been updated'); this.showUsers() })
        .catch(err => alert(err))
    }
  }
}
</script>
