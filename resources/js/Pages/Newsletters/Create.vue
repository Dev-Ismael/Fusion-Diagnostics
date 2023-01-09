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
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Create form</h4>
                                    <p class="card-description">
                                        Add new branch Newsletter
                                    </p>
                                    <form class="forms-sample" @submit.prevent="storeNewsletter()">

                                        <!------ Title ------->
                                        <div class="form-group">
                                            <label for="subject">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Newsletter Subject
                                            </label>
                                            <input type="text" name="subject" id="subject" class="form-control"
                                                placeholder="Type subject Here..." v-model="form.subject"
                                                :class="errors.subject ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.subject"> {{ errors.subject
                                            }}</small>
                                        </div>


                                        <!-- content -->
                                        <div class="form-group">
                                            <label for="content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i>
                                                Content </label>
                                            <ckeditor :editor="editor" v-model="form.content" id="content"
                                                name="content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{ errors.content }}
                                            </small>
                                        </div>

                                        <!------ Buttons ------->
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <Link href="/admin/newsletter" class="btn btn-light">Cancel</Link>

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
        errors: Object,
    },
    data() {
        return {
            editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
            form: {
                name: null,
                content: null,
                img: null,
            },
        }
    },
    methods: {
        storeNewsletter() {
            this.$inertia.post('/admin/newsletter', this.form);
        }
    },
}
</script>
