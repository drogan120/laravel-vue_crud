<template>
    <div class="container mx-auto mt-5 rounded">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="text-secondary text-center mt-3 mb-3">Users List</h4>
                <table class="table table-hovered">
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
                                <a
                                    :to="profile_uri()"
                                    class="btn btn-info text-white"
                                    >Detail</a
                                >
                            </td>
                            <td>
                                <a :to="profile_uri()" class="btn btn-danger"
                                    >Delete</a
                                >
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
            users: [],
        }
    },
    mounted () {
        this.showUsers()
    },
    methods: {
        showUsers () {
            axios.get('/api/users')
                .then(result => this.users = result.data)
                .catch((err) => { console.log(err) })
        },
        profile_uri (name) {
            return '/users' + name
        }
    }
}
</script>
