<template>

    <Head title=" Admin Panel | Messeges" />
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Show Messege</h4>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-title"></i>
                                Name
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ messege.name }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-align-left"></i>
                                Email
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p v-html="messege.email"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-title"></i>
                                phone
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ messege.phone }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-align-left"></i>
                                Subject
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p v-html="messege.subject"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-align-left"></i>
                                Messege
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p v-html="messege.body"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <!------ Buttons ------->
                            <Link href="/admin/messege"  class="btn btn-primary d-block">Back</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>

import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link,
    },
    props: {
        messege: Object,
    },
}

</script>
