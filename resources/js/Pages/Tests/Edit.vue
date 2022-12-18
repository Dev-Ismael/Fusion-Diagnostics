<template>
    <Head title=" Admin Panel | Tests" />
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Edit form</h4>
                    <p class="card-description"> Update this branch Test </p>
                    <form class="forms-sample" @submit.prevent="updateTest()">

                        <!------ Title ------->
                        <div class="form-group">
                            <label for="title">
                                <i class="ti-test-pin"></i>
                                Test Title
                            </label>
                            <input type="text" name="title" class="form-control" placeholder="Type Test Title Here..."
                                v-model="test.title" :class=" errors.title ? 'border-danger' : ''  " >
                            <small class="text-danger" v-if="errors.title"> {{errors.title }}</small>
                        </div>

                        <!------ service_id ------->
                        <div class="form-group">
                            <label for="service_id">
                                <i class="ti-test-pin"></i>
                                Parent Service
                            </label>
                            <select name="service_id" id="service_id" class="form-control" v-model="test.service_id"
                                :class="errors.service_id ? 'border-danger' : ''">
                                <option disabled value="" >Please select Service</option>
                                <option v-for="service in services" :value="service.id"

                                >{{service.title}}</option>
                            </select>
                            <small class="text-danger" v-if="errors.service_id"> {{ errors.service_id }}</small>
                        </div>

                        <!-- summary -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i
                                    class="mdi mdi-format-align-left"></i> Summary </label>
                            <textarea name="summary" v-model="test.summary" class="form-control"
                                :class=" errors.summary ? 'border-danger' : ''  " id="message-text"
                                rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors.summary"> {{errors.summary }}
                            </small>
                        </div>

                        <!-- content -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i
                                    class="mdi mdi-format-align-left"></i> Content </label>
                            <ckeditor :editor="editor" v-model="test.content" name="content"></ckeditor>
                            <small class="text-danger" v-if="errors.content"> {{errors.content }}
                            </small>
                        </div>


                        <!-- seo_title -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Title </label>
                            <textarea name="seo[title]" v-model="test.seo.title" class="form-control"
                                :class=" errors[`seo.title`] ? 'border-danger' : ''  " id="message-text" placeholder="Type SEO Keywords..."
                                rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.title`]"> {{errors[`seo.title`] }}
                            </small>
                        </div>


                        <!-- seo_keywords -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Keywords </label>
                            <textarea name="seo[keywords]" v-model="test.seo.keywords" class="form-control"
                                :class=" errors[`seo.keywords`] ? 'border-danger' : ''  " id="message-text" placeholder="Type SEO Keywords..."
                                rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.keywords`]"> {{errors[`seo.keywords`] }}
                            </small>
                        </div>


                        <!-- seo_description -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Description </label>
                            <textarea name="seo[description]" v-model="test.seo.description" class="form-control"
                                :class=" errors[`seo.description`] ? 'border-danger' : ''  " id="message-text" placeholder="Type SEO Keywords..."
                                rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.description`]"> {{errors[`seo.description`]}}
                            </small>
                        </div>



                        <!------ Buttons ------->
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                        <Link href="/admin/test"  class="btn btn-light">Cancel</Link>

                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import { Link, Head } from '@inertiajs/inertia-vue3'
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        components: {
            Link,
            Head,
        },
        props: {
            test: Object,
            services: Object,
            errors: Object,
        },
        data() {
            return {
                editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
            }
        },
        methods: {
            updateTest() {
                this.$inertia.put('/admin/test/' + this.test.id, this.test);
            }
        },
    }

</script>
