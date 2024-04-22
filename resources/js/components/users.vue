<template>
    <input type="text" @keyup="read" v-model="search" placeholder="Search users..." />
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
        </tr>
        <tr v-for="user in results">
        <!-- <tr v-for="user in filteredList()" :key="user"> -->
            <th><img :src="user.avatar" :alt="user.avatar" height="100" width="100"></th>
            <th>{{ user.id }}</th>
            <th>{{ user.first_name }}</th>
            <th>{{ user.last_name }}</th>
            <th>{{ user.email }}</th>
        </tr>
    </table>
</template>

<script>
export default{
        data(){
            return {
                query: '',
                url: '/users',
                search: null,
                results: []
            }
        },
        methods: {
            read(){
                this.results = [];
                axios.get('/api/users').then(response => {
                    this.results = response.data;
                }).then(res => {
                    if (this.search) {
                        this.results = this.results.filter(people =>
                        people.first_name.toLowerCase().includes(this.search.toLowerCase())
                        );
                    }
                });;
            }
        },
        created() {
            this.read();
        },

        
    };


</script>