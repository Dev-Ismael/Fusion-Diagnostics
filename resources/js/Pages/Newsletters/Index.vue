<template>

    <Head title=" Admin Panel | Newsletters" />

    <div class="container-scroller">
        <admin_navbar></admin_navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <admin_sidebar></admin_sidebar>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title"> <i class="mdi mdi-email-open"></i> Newsletters
                                        table</h4>
                                </div>
                                <div class="col-6 text-end">
                                    <Link href="/admin/newsletter/create"
                                        class="btn btn-danger btn-rounded btn-icon p-2"> Create
                                    New Newsletter </Link>
                                </div>
                            </div>


                            <div class="row">
                                <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer pt-3">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3">
                                            <div class="form-group multi-action">
                                                <div class="input-group">
                                                    <select name="action" v-model="multiAction.action"
                                                        class="js-example-basic-single" style="margin-left:5px">
                                                        <option value="">Choose Action</option>
                                                        <option value="delete">Delete Newsletter</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-facebook" type="button"
                                                            @click="ChooseMultiAction()">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                                <small class="text-danger"> </small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3 offset-md-6 ml-auto">
                                            <div id="order-listing_filter" class="dataTables_filter">
                                                <label class="w-100">
                                                    <input type="text" class="form-control w-100"
                                                        placeholder="Search By Newsletter Subject..." name="searchVal"
                                                        v-model="search.value" @keyup="searchNewsletter()"
                                                        maxlength="55" aria-controls="order-listing"
                                                        autocomplete="nope" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-if="$page.props.flash.messege"
                                :class="'alert alert-fill-' + $page.props.flash.messege.status" role="alert">
                                <i class="ti-info-alt"></i>
                                {{ $page.props.flash.messege.txt }}
                            </div>


                            <div class="row">
                                <div class="col-12 grid-margin stretch-card">

                                    <!------------- Newsletters exist ----------->
                                    <div v-if="newsletters.data.length > 0" class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th>
                                                                <div class="form-check mt-0 mb-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" id="main-ckecker"
                                                                            class="form-check-input"
                                                                            @change="ckeckboxClicked($event)" />
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th>Subject</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="newsletter in newsletters.data" :key="newsletter.id">
                                                            <td class="jsgrid-cell" style="width: 100px;">
                                                                <div class="form-check mt-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox"
                                                                            class="form-check-input check-item"
                                                                            :value="newsletter.id"
                                                                            v-model="multiAction.id">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> {{ newsletter.subject.length > 20 ?
                                                                    newsletter.subject.slice(0, 20) +
                                                                    '...' :
                                                                    newsletter.subject
                                                            }} </td>
                                                            <td>
                                                                <Link :href="('/admin/newsletter/' + newsletter.id)"
                                                                    class="btn btn-secondary btn-rounded btn-icon p-2">
                                                                <i class="mdi mdi-eye"></i>
                                                                </Link>
                                                                &nbsp;
                                                                <button type="button" @click="deletePost(newsletter)"
                                                                    class="btn btn-danger btn-rounded btn-icon p-2">
                                                                    <i class="ti-close"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <pagination class="mt-6" :links="newsletters.links" />
                                    </div>

                                    <div v-else class="card">
                                        <div class="card-body text-center">
                                            <img src="/admin/images/nodata-found.png" alt="no-data">
                                            <h4> Sorry, No Data Found! </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>

</template>
<script>


export default {
    props: {
        newsletters: Object,
    },
    data() {
        return {
            search: {
                value: ''
            },
            multiAction: {
                id: [],
                action: ''
            },
        }
    },
    methods: {

        /*======================================================
        ====== deletePost
        ======================================================*/
        deletePost(newsletter) {
            let msg = "Are You Sure!";
            if (confirm(msg) == true) {
                this.$inertia.delete('/admin/newsletter/' + newsletter.id, newsletter);
            }
        },


        /*======================================================
        ====== Search Newsletter
        ======================================================*/
        searchNewsletter() {
            this.$inertia.post('/admin/newsletter/search', this.search);
        },


        /*======================================================
        ====== CheckBox
        ======================================================*/
        ckeckboxClicked(event) {
            const checkItems = document.querySelectorAll(".check-item");
            if (event.target.checked) { // check if main checker checked
                // Push all serivces id multiAction object
                this.newsletters.data.forEach(newsletter => {
                    this.multiAction.id.push(newsletter.id)
                });
                // add checked to checkbox
                for (var i = 0; i < checkItems.length; i++) {
                    checkItems[i].checked = true;
                }
            } else {
                // empty Multi Action Id
                this.multiAction.id = [];
                // remove checked to checkbox
                for (var i = 0; i < checkItems.length; i++) {
                    checkItems[i].checked = false;
                }
            }
        },


        /*======================================================
        ====== Multi Action
        ======================================================*/
        ChooseMultiAction() {
            if (this.multiAction.action == '') {
                alert("Please Choose Action to do.")
            } else if (this.multiAction.id == '') {
                alert("Please select newsletters.")
            } else {
                let msg = "Are You Sure!";
                if (confirm(msg) == true) {
                    this.$inertia.post('/admin/newsletter/multiAction', this.multiAction);
                }
            }
        }


    },
}

</script>
