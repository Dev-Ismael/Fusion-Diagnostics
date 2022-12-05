<template>

    <Head title=" Admin Panel | Locations" />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title"> <i class="fa-solid mdi mdi-book-multiple"></i> Locations table</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="#" type="button" class="btn btn-danger btn-rounded btn-icon p-2" data-bs-toggle="modal"> Create
                        New Location </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Location</th>
                                            <th>Street View</th>
                                            <th>Working Hours</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="location in locations" :key="location.id">
                                            <td> {{ location.title.length > 20 ? location.title.slice(0, 20) + '...' :
                                                location.title }} </td>
                                            <td>
                                                <a :href="location.street_view" target="_blank">
                                                    <span class="btn btn-success btn-rounded btn-icon">
                                                        <i class="ti-location-pin"></i>
                                                    </span>
                                                </a>
                                            </td>
                                            <td> {{ location.working_hours }} </td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#showDataModal" @click="showService(service)"
                                                    class="btn btn-secondary btn-rounded btn-icon p-2">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                &nbsp;
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#formModal" @click="editService(service)"
                                                    class="btn btn-primary btn-rounded btn-icon p-2">
                                                    <i class="ti-marker-alt"></i>
                                                </button>
                                                &nbsp;
                                                <button type="button" @click="deletePost(service)"
                                                    class="btn btn-danger btn-rounded btn-icon p-2">
                                                    <i class="ti-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>

</template>
<script>
    import { Link, Head } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link,
            Head,
        },
        props: {
            locations: Array,
        },

    }
</script>
