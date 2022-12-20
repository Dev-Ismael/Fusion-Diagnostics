<template>

    <Head title=" Admin Panel | Services" />
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Create form</h4>
                    <p class="card-description">
                        Add new branch Service
                    </p>
                    <form class="forms-sample" @submit.prevent="storeService()">

                        <!------ Title ------->
                        <div class="form-group">
                            <label for="title">
                                <i class="ti-form-pin"></i>
                                Service Title
                            </label>
                            <input type="text" name="title" class="form-control"
                                placeholder="Type Service Title Here..." v-model="form.title"
                                :class="errors.title ? 'border-danger' : ''">
                            <small class="text-danger" v-if="errors.title"> {{ errors.title }}</small>
                        </div>


                        <!-- seo_title -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Title </label>
                            <textarea name="seo[title]" v-model="form.seo.title" class="form-control"
                                :class="errors[`seo.title`] ? 'border-danger' : ''" id="message-text"
                                placeholder="Type SEO Keywords..." rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.title`]"> {{ errors[`seo.title`] }}
                            </small>
                        </div>


                        <!-- seo_keywords -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Keywords </label>
                            <textarea name="seo[keywords]" v-model="form.seo.keywords" class="form-control"
                                :class="errors[`seo.keywords`] ? 'border-danger' : ''" id="message-text"
                                placeholder="Type SEO Keywords..." rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.keywords`]"> {{ errors[`seo.keywords`] }}
                            </small>
                        </div>

                        <!-- seo_description -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                SEO Description </label>
                            <textarea name="seo[description]" v-model="form.seo.description" class="form-control"
                                :class="errors[`seo.description`] ? 'border-danger' : ''" id="message-text"
                                placeholder="Type SEO Keywords..." rows="4" cols="50"></textarea>
                            <small class="text-danger" v-if="errors[`seo.description`]"> {{ errors[`seo.description`] }}
                            </small>
                        </div>


                        <!-- summary -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="mdi mdi-format-align-left"></i>
                                Summary </label>
                            <textarea name="summary" v-model="form.summary" class="form-control"
                                :class="errors.summary ? 'border-danger' : ''" id="message-text" rows="4"
                                cols="50"></textarea>
                            <small class="text-danger" v-if="errors.summary"> {{ errors.summary }}
                            </small>
                        </div>


                        <!-- content -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"> <i class="mdi mdi-format-align-left"></i>
                                Content </label>
                            <ckeditor :editor="editor" v-model="form.content" name="content"></ckeditor>
                            <small class="text-danger" v-if="errors.content"> {{ errors.content }}
                            </small>
                        </div>




                        <!-- Icon -->
                        <div class="form-group">
                            <label> <i class="mdi mdi-file-image"></i> Upload Icon </label>
                            <input type="file" class="form-control" name="icon" id="icon" placeholder="Upload Icon"
                                @input="form.icon = $event.target.files[0]"
                                :class="errors.icon ? 'border-danger' : ''">
                            <small class="text-danger" v-if="errors.icon"> {{ errors.icon }} </small>
                        </div>


                        <!-- Image -->
                        <div class="form-group">
                            <label> <i class="mdi mdi-file-image"></i> Upload Big Image </label>
                            <input type="file" class="form-control" name="img" id="img" placeholder="Upload Icon"
                                @input="form.img = $event.target.files[0]"
                                :class="errors.img ? 'border-danger' : ''">
                            <small class="text-danger" v-if="errors.img"> {{ errors.img }} </small>
                        </div>

                        <!------ Buttons ------->
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <Link href="/admin/service" class="btn btn-light">Cancel</Link>

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
            errors: Object,
        },
        data() {
            return {
                editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
                form: {
                    title: null,
                    summary: null,
                    content: null,
                    seo: {
                        title: null,
                        keywords: null,
                        description: null,
                    },
                    icon: null,
                    img: null,
                },
            }
        },
        methods: {
            storeService() {
                this.$inertia.post('/admin/service', this.form);
            }
        },
    }
</script>
