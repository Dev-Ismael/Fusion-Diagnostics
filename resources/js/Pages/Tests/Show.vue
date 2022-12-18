<template>

    <Head title=" Admin Panel | Tests" />
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Show Test</h4>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-title"></i>
                                Test title
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ test.title }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-title"></i>
                                Service title
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ service.title }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="ti-search"></i>
                                SEO Title
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ test.seo.title }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="ti-search"></i>
                                SEO Description
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ test.seo.description }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="ti-search"></i>
                                SEO Keywords
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ test.seo.keywords }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-format-align-left"></i>
                                Summary
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ test.summary }} </p>
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
                            <p v-html="test.content"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <!------ Buttons ------->
                            <Link href="/admin/test"  class="btn btn-primary d-block">Back</Link>
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
        test: Object,
        service: Object,
    },
}

</script>
