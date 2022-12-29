<template>

    <Head title=" Admin Panel | SEO Management" />

    <div class="container-scroller">
        <admin_navbar></admin_navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <admin_sidebar></admin_sidebar>
            <div class="main-panel">


                <div class="content-wrapper">

                    <div v-if="$page.props.flash.messege"
                        :class="'alert alert-fill-' + $page.props.flash.messege.status" role="alert">
                        <i class="ti-info-alt"></i>
                        {{ $page.props.flash.messege.txt }}
                    </div>

                    <!-- partial -->
                    <form @submit.prevent="UpdateSeo()" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> <i class="fa-solid fa-house-user"></i> Home Page </h4>
                                        <div class="form-group">
                                            <label for="HomeSEOTitle">SEO Title</label>
                                            <input type="text" class="form-control" id="HomeSEOTitle" v-model="form.home.title"
                                                name="home[seo_title]" placeholder="Type Home Page Seo Title..."
                                                autocomplete="off" :class=" errors[`home.title`] ? 'border-danger' : ''  "  />
                                                <small class="text-danger" v-if="errors[`home.title`]"> {{errors[`home.title`] }}
                                                </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="HomeSEOKeywords">SEO Keywords</label>
                                            <textarea class="form-control" id="HomeSEOKeywords"
                                                v-model="form.home.keywords" cols="30" rows="10"
                                                name="home[seo_keywords]" placeholder="Type Home Page SEO Keywords..."
                                                autocomplete="off"
                                                :class=" errors[`home.keywords`] ? 'border-danger' : ''  "  > ></textarea>
                                                <small class="text-danger" v-if="errors[`home.keywords`]"> {{errors[`home.keywords`] }}
                                                </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="HomeSEODescription">SEO Description</label>
                                            <textarea class="form-control" id="HomeSEODescription"
                                                v-model="form.home.description" cols="30" rows="10"
                                                name="home[seo_description]"
                                                placeholder="Type Home Page SEO Description..." autocomplete="off"
                                                :class=" errors[`home.description`] ? 'border-danger' : ''  "  > ></textarea>
                                                <small class="text-danger" v-if="errors[`home.description`]"> {{errors[`home.description`] }}
                                                </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> <i class="fa-solid fa-circle-info"></i> About Page </h4>
                                        <div class="form-group">
                                            <label for="AboutSEOTitle">SEO Title</label>
                                            <input type="text" class="form-control" id="AboutSEOTitle" v-model="form.about.title" name="about[seo_title]"
                                                placeholder="Type About Page Seo Title..." autocomplete="off"  :class=" errors[`about.title`] ? 'border-danger' : ''  "  />
                                            <small class="text-danger" v-if="errors[`about.title`]"> {{errors[`about.title`] }}
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="AboutSEOKeywords">SEO Keywords</label>
                                            <textarea class="form-control" id="AboutSEOKeywords"  v-model="form.about.keywords"  cols="30" rows="10"
                                            name="about[seo_keywords]" placeholder="Type About Page SEO Keywords..."
                                                autocomplete="off" :class=" errors[`about.keywords`] ? 'border-danger' : ''  " ></textarea>
                                            <small class="text-danger" v-if="errors[`about.keywords`]"> {{errors[`about.keywords`] }}
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="AboutSEODescription">SEO Description</label>
                                            <textarea class="form-control" id="AboutSEODescription"  v-model="form.about.description"  cols="30" rows="10"
                                                name="about[seo_description]" placeholder="Type About Page SEO Description..."
                                                autocomplete="off"  :class=" errors[`about.description`] ? 'border-danger' : ''  "></textarea>
                                            <small class="text-danger" v-if="errors[`about.description`]"> {{errors[`about.description`] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> <i class="fa-solid fa-message"></i> Contact Page </h4>
                                        <div class="form-group">
                                            <label for="ContactSEOTitle">SEO Title</label>
                                            <input type="text" class="form-control" id="ContactSEOTitle" v-model="form.contact.title" name="contact[seo_title]"
                                                placeholder="Type Contact Page Seo Title..." autocomplete="off"  :class=" errors[`contact.title`] ? 'border-danger' : ''  "  />
                                            <small class="text-danger" v-if="errors[`contact.title`]"> {{errors[`contact.title`] }}
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ContactSEOKeywords">SEO Keywords</label>
                                            <textarea class="form-control" id="ContactSEOKeywords"  v-model="form.contact.keywords"  cols="30" rows="10"
                                            name="contact[seo_keywords]" placeholder="Type Contact Page SEO Keywords..."
                                                autocomplete="off" :class=" errors[`contact.keywords`] ? 'border-danger' : ''  " ></textarea>
                                            <small class="text-danger" v-if="errors[`contact.keywords`]"> {{errors[`contact.keywords`] }}
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ContactSEODescription">SEO Description</label>
                                            <textarea class="form-control" id="ContactSEODescription"  v-model="form.contact.description"  cols="30" rows="10"
                                                name="contact[seo_description]" placeholder="Type Contact Page SEO Description..."
                                                autocomplete="off"  :class=" errors[`contact.description`] ? 'border-danger' : ''  "></textarea>
                                            <small class="text-danger" v-if="errors[`contact.description`]"> {{errors[`contact.description`] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        errors: Object,
        seoManagement: Object,
    },
    data() {
        return {
            form: {
                _method: 'put',     // PUT Method
                home: this.seoManagement.home,
                about: this.seoManagement.about,
                contact: this.seoManagement.contact,
            },
        }
    },
    mounted() {
        console.log(this.seoManagement);
    },
    methods: {
        UpdateSeo() {
            this.$inertia.post('/admin/seo-management/' + this.seoManagement.id, this.form);
        }
    },
}

</script>
