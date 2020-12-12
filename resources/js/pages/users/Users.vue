<template>
  <div class="container mx-auto mt-5 rounded">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-secondary text-center mt-3 mb-3">Users List</h4>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search ...." @keyup="searchUser(keyword)" v-model="keyword" />
        </div>
        <router-link to="/new/users" class="btn btn-info text-light mt-3 mb-3"
          >New User</router-link
        >
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Address</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users">
              <td>*</td>
              <td>{{ user.name }}</td>
              <td>{{ user.email }}</td>
              <td>{{ user.address }}</td>
              <td>
                <router-link
                  :to="profile_uri(user.id)"
                  class="btn btn-info text-white"
                  >Detail</router-link
                >
              </td>
              <td>
                <form v-on:submit.prevent>
                  <input type="hidden" name="id" :value="user.id" />
                  <button
                    type="submit"
                    @click="deleteUser(user.id)"
                    class="btn btn-danger"
                  >
                    Delete
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      keyword: '',
      users: [],
    }
  },
  mounted () {
    this.showUsers()
  },
  methods: {
    async showUsers () {
      await axios.get('/api/users')
        .then(result => this.users = result.data)
        .catch((err) => { console.log(err) })
    },
    profile_uri (id) {
      return `/users/${id}`
    },
    async deleteUser (id) {
      await axios.delete(`/api/users/${id}`)
        .then((res) => { alert(`data has been deleted`); this.showUsers() })
        .catch(err => console.log(err))
    },
    async searchUser (name) {
     if(name != ''){
       console.log('searching')
        await axios.get(`/api/users/name/${name}`)
        .then((res) => this.users = res.data)
        .catch(err => console.log(err))
     }else{
       console.log('get all list')
       this.showUsers()
     }
    }
  }
}
</script>
