<template>
    <div class="container">
        <form @submit.prevent="register">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">WWSP</div>

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
                                        <td><input v-model="item.code"/></td>
                                        <td><input v-model="item.name"/></td>
                                        <td><input v-model="item.age"/></td>
                                        <td>
                                            <select v-model="item.area_id">
                                                <!-- <option value="">Select Location</option> -->
                                                <option v-for="item in areas" :key="item.id" :value="item.id">
                                                {{ item.name }}
                                            </option>
                                            </select>
                                        </td>
                                        <td><button v-if="i > 0" type="button" class="btn btn-sm btn-danger mt-0" @click="remove(i)">-</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>

<script>
// import axios from 'axios';
    export default {
       data () {
        return {
            areas: {},
            addData: [
                {
                    code: '',
                    name: '',
                    age: '',
                    area_id:''
                }
            ]
        }
       },
       mounted(){
            fetch(`http://localhost:8000/api/areas`, { method: 'GET' })
            .then(response => response.json()).then( (data)=>{
                console.log(data);
                this.areas = data;
                console.log('this area', this.areas);
            })
       },
       methods:{
         register () {
            console.log('register', this.addData);
            const requestOptions = {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ title: "Post Customer Data" })
            };
            fetch("http://localhost:8000/api/customers", requestOptions)
                .then(response => response.json())
                .then(data => (this.addData = data.id));
        },
        add () {
            this.addData.push({
                    code: '',
                    name: '',
                    age: '',
                    area_id:''
            })
        },
        remove (index, id) {
            this.addData.splice(index, 1)
        }
       }
    }
</script>
