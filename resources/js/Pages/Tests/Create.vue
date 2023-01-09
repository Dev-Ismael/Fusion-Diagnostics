<template>

    <Head title=" Admin Panel | Tests" />
    <div class="container-scroller">
        <admin_navbar></admin_navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <admin_sidebar></admin_sidebar>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Create form</h4>
                                    <p class="card-description">
                                        Add new branch Test
                                    </p>
                                    <form class="forms-sample" @submit.prevent="storeTest()">


                                        <!------ Title ------->
                                        <div class="form-group">
                                            <label for="title">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Test Title
                                            </label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Type Test Title Here..." v-model="form.title"
                                                :class="errors.title ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.title"> {{ errors.title }}</small>
                                        </div>

                                        <!------ Code ------->
                                        <div class="form-group">
                                            <label for="code">
                                                <i class="fa-solid fa-hashtag"></i>
                                                Code
                                            </label>
                                            <input type="text" name="code" id="code" class="form-control"
                                                placeholder="Type Test Code Here..." v-model="form.code"
                                                :class="errors.code ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.code"> {{ errors.code }}</small>
                                        </div>


                                        <!------ time ------->
                                        <div class="form-group">
                                            <label for="time">
                                                <i class="fa-solid fa-clock"></i>
                                                Time
                                            </label>
                                            <input type="text" name="time" id="time" class="form-control"
                                                placeholder="Type Test time Here..." v-model="form.time"
                                                :class="errors.time ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.time"> {{ errors.time }}</small>
                                        </div>


                                        <!------ components ------->
                                        <div class="form-group">
                                            <label for="components">
                                                <i class="fa-solid fa-flask"></i>
                                                Components
                                            </label>
                                            <input type="text" name="components" id="components" class="form-control"
                                                placeholder="Type Test Components Here..." v-model="form.components"
                                                :class="errors.components ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.components"> {{ errors.components }}</small>
                                        </div>



                                        <!------ specimen ------->
                                        <div class="form-group">
                                            <label for="specimen">
                                                <i class="fa-solid fa-vials"></i>
                                                Specimen
                                            </label>
                                            <input type="text" name="specimen" id="specimen" class="form-control"
                                                placeholder="Type Test specimen Here..." v-model="form.specimen"
                                                :class="errors.specimen ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.specimen"> {{ errors.specimen }}</small>
                                        </div>




                                        <!------ instructions ------->
                                        <div class="form-group">
                                            <label for="instructions">
                                                <i class="fa-brands fa-42-group"></i>
                                                Instructions
                                            </label>
                                            <input type="text" name="instructions" id="instructions" class="form-control"
                                                placeholder="Type Test instructions Here..." v-model="form.instructions"
                                                :class="errors.instructions ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.instructions"> {{ errors.instructions }}</small>
                                        </div>



                                        <!------ billing_codes ------->
                                        <div class="form-group">
                                            <label for="billing_codes">
                                                <i class="fa-solid fa-money-bill-wave"></i>
                                                Billing Codes
                                            </label>
                                            <input type="text" name="billing_codes" id="billing_codes" class="form-control"
                                                placeholder="Type Test billing_codes Here..." v-model="form.billing_codes"
                                                :class="errors.billing_codes ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.billing_codes"> {{ errors.billing_codes }}</small>
                                        </div>




                                        <!------ Buttons ------->
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <Link href="/admin/test" class="btn btn-light">Cancel</Link>

                                    </form>
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

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
    props: {
        services: Object,
        errors: Object,
    },
    data() {
        return {
            editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
            form: {
                title: null,
                code: null,
                time: null,
                components: null,
                specimen: null,
                instructions: null,
                billing_codes: null,
            },
        }
    },
    methods: {
        storeTest() {
            this.$inertia.post('/admin/test', this.form);
        }
    },
}
</script>
