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
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data () {
        return {
            user: [],
        }
    },
    mounted () {
        this.showUsers()
    },
    methods: {
        async showUsers () {
           await axios.get('/api/users/' + this.id)
                .then(result => {
                    this.user = result.data
                    console.log(result.data)
                })
                .catch((err) => { console.log(err) })
        },
    }
}
</script>
