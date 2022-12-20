<template>

    <Head title=" Admin Panel | Testimonials" />
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Show Testimonial</h4>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-title"></i>
                                Client name
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ testimonial.name }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-align-left"></i>
                                Content
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p v-html="testimonial.content"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-file-image"></i>
                                Image
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> <img :src="'/storage/images/testimonials/' + testimonial.img "
                                alt="testimonial-img" width="160"> </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <!------ Buttons ------->
                            <Link href="/admin/testimonial"  class="btn btn-primary d-block">Back</Link>
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
        testimonial: Object,
    },
}

</script>
