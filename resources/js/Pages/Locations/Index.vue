<template>

    <Head title=" Admin Panel | Locations" />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title"> <i class="fa-solid mdi mdi-book-multiple"></i> Locations table</h4>
                </div>
                <div class="col-6 text-end">
                    <Link href="/admin/location/create" class="btn btn-danger btn-rounded btn-icon p-2"> Create
                        New Location </Link>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4  ml-auto">
                    <div id="order-listing_filter" class="dataTables_filter">
                        <label class="w-100">
                            <input type="text" class="form-control w-100" placeholder="Search By Title..."
                            name="searchVal" v-model="search.value" @keyup="searchLocation()"
                            maxlength="55" aria-controls="order-listing" autocomplete="nope" />
                        </label>
                    </div>
                </div>
            </div>

            <div v-if="$page.props.flash.messege" :class=" 'alert alert-fill-' +  $page.props.flash.messege.status " role="alert">
                <i class="ti-info-alt"></i>
                {{ $page.props.flash.messege.txt }}
            </div>


            <div class="row">
                <div class="col-12 grid-margin stretch-card">

                    <!--------- Locations exist ----------->
                    <div v-if="locations.data.length > 0 "  class="card">
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
                                        <tr v-for="location in locations.data" :key="location.id">
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
                                                <Link :href="('/admin/location/'+location.id)"
                                                    class="btn btn-secondary btn-rounded btn-icon p-2">
                                                    <i class="mdi mdi-eye"></i>
                                                </Link>
                                                &nbsp;
                                                <Link :href="('/admin/location/'+location.id+'/edit')"
                                                    class="btn btn-primary btn-rounded btn-icon p-2">
                                                <i class="ti-marker-alt"></i>
                                                </Link>
                                                &nbsp;
                                                <button type="button" @click="deletePost(location)"
                                                    class="btn btn-danger btn-rounded btn-icon p-2">
                                                    <i class="ti-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <pagination class="mt-6" :links="locations.links" />
                    </div>

                    <div v-else  class="card">
                        <div class="card-body text-center">
                            <img src="/admin/images/nodata-found.png" alt="no-data">
                            <h4> Sorry, No Data Found! </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>





    </div>

</template>
<script>

    import Pagination from '../../components/pagination.vue'
    import { Link, Head } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link,
            Head,
            Pagination
        },
        props: {
            locations: Object,
        },
        data() {
            return {
                search: {
                    value: ''
                },
                // multiAction: {
                //     id: [],
                //     action: ''
                // },
            }
        },
        methods: {

            deletePost(location){
                let msg = "Are You Sure!";
                if ( confirm(msg) == true ) {
                    this.$inertia.delete('/admin/location/' + location.id, location);
                }
            },


            /*======================================================
            ====== Search Location
            ======================================================*/
            searchLocation() {
                this.$inertia.post('/admin/location/search', this.search);
            },

        },
    }

</script>
