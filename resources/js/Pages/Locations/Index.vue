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


            <div v-if="$page.props.flash.messege" :class=" 'alert alert-fill-' +  $page.props.flash.messege.status " role="alert">
                <i class="ti-info-alt"></i>
                {{ $page.props.flash.messege.txt }}
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
        methods: {
            deletePost(location){

                let msg = "Are You Sure!";
                if ( confirm(msg) == true ) {
                    this.$inertia.delete('/admin/location/' + location.id, location);
                }

            }
        },
    }

</script>
