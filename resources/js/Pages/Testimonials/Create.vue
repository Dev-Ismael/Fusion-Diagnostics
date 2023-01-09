<template>

    <Head title=" Admin Panel | Testimonials" />

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
                                        Add new branch Testimonial
                                    </p>
                                    <form class="forms-sample" @submit.prevent="storeTestimonial()">

                                        <!------ Title ------->
                                        <div class="form-group">
                                            <label for="name">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Client Username
                                            </label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Type Client Username Here..." v-model="form.name"
                                                :class="errors.name ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.name"> {{ errors.name }}</small>
                                        </div>


                                        <!-- content -->
                                        <div class="form-group">
                                            <label for="content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i>
                                                Testmonail Content </label>
                                            <textarea name="content" :class="errors.content ? 'border-danger' : ''"
                                                class="form-control" id="content" v-model="form.content" cols="30"
                                                rows="10"></textarea>
                                            <small class="text-danger" v-if="errors.content"> {{ errors.content }}
                                            </small>
                                        </div>


                                        <!-- Image -->
                                        <div class="form-group">
                                            <label for="img"> <i class="mdi mdi-file-image"></i> Upload Client Image
                                            </label>
                                            <input type="file" class="form-control" name="img" id="img"
                                                placeholder="Upload Icon" @input="form.img = $event.target.files[0]"
                                                :class="errors.img ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.img"> {{ errors.img }} </small>
                                        </div>

                                        <!------ Buttons ------->
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <Link href="/admin/testimonial" class="btn btn-light">Cancel</Link>

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


export default {

    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                name: null,
                content: null,
                img: null,
            },
        }
    },
    methods: {
        storeTestimonial() {
            this.$inertia.post('/admin/testimonial', this.form);
        }
    },
}
</script>
