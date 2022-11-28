<template>
    <div class="container">
        <div class="row justify-content-center mt-8">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">WWSP</div>
                    <form @submit.prevent="register">
                        <div class="card-body">
                            <table class="table mt-2">
                            <thead>
                                <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Location</th>
                                <th scope="col"><button type="button" class="btn btn-sm btn-primary mt-3" @click.prevent="add()">+</button></th>

                                </tr>
                            </thead>
                                <tbody v-for="(item, i) in addData" :key="i">
                                    <tr>
                                    <td scope="row"><input v-model="item.code"/></td>
                                    <td><input v-model="item.full_name"/></td>
                                    <td><input v-model="item.age"/></td>
                                    <td><input v-model="item.location"/></td>
                                    <td><button v-if="i > 0" type="button" class="btn btn-sm btn-danger mt-0" @click="remove(i)">-</button></td>
                                    </tr>
                                </tbody>
                                <div class="row">
                                    <div class="justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data () {
        return {
            addData: [
                {
                    code: '',
                    full_name: '',
                    age: '',
                    location:''
                }
            ]
        }
       },
       methods:{
        async register () {
            console.log(this.addData);
            await axios.post(this.api, this.data)
        },
        add () {
            this.addData.push({
                    code: '',
                    full_name: '',
                    age: '',
                    location:''
            })
        },
        remove (index, id) {
            this.addData.splice(index, 1)
        }
       }
    }
</script>
