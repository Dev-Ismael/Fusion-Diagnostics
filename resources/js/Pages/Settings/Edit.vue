<template>

    <Head title=" Admin Panel | Settings" />

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
                    <form @submit.prevent="UpdateSetting()" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-12 col-xl-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> <i class="mdi mdi-settings menu-icon"></i> Fusion Settings </h4>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="genral-tab" data-bs-toggle="tab" href="#genral-setting"
                                                    role="tab" aria-controls="genral-setting" aria-selected="true">Genral Setting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="social-media-tab" data-bs-toggle="tab" href="#social-media"
                                                    role="tab" aria-controls="social-media" aria-selected="false">Social Media</a>
                                            </li>
                                        </ul>
                                        <form @submit.prevent="updateSettings()" enctype="multipart/form-data" method="POST">
                                            <div class="tab-content">
                                                <!-------- Genral Setting -------->
                                                <div class="tab-pane fade active show" id="genral-setting" role="tabpanel"
                                                    aria-labelledby="genral-tab">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" v-model="form.email" class="form-control" name="email"
                                                            id="email" placeholder="Type E-mail Address...." :class=" errors.email ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.email"> {{errors.email }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" v-model="form.phone" class="form-control" name="phone"
                                                            id="phone" placeholder="Type Phone Number...." :class=" errors.phone ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.phone"> {{errors.phone }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone_formatted">Phone Formatted</label>
                                                        <input type="text" v-model="form.phone_formatted" class="form-control" name="phone_formatted"
                                                            id="phone_formatted" placeholder="Type Phone Formatted For Calls...." :class=" errors.phone_formatted ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.phone_formatted"> {{errors.phone_formatted }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" v-model="form.address" class="form-control" name="address"
                                                            id="address" placeholder="Type Address...." :class=" errors.address ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.address"> {{errors.address }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input type="text" v-model="form.location" class="form-control" name="location"
                                                            id="location" placeholder="Type Location...." :class=" errors.location ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.location"> {{errors.location }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="footer_content">Footer Content</label>
                                                        <textarea v-model="form.footer_content" class="form-control"
                                                            name="footer_content" id="footer_content"
                                                            placeholder="Footer Content...." :class=" errors.footer_content ? 'border-danger' : ''  " ></textarea>
                                                        <small class="text-danger" v-if="errors.footer_content"> {{errors.footer_content }}
                                                        </small>
                                                    </div>
                                                </div>
                                                <!-------- social-media -------->
                                                <div class="tab-pane fade" id="social-media" role="tabpanel"
                                                    aria-labelledby="social-media-tab">

                                                    <div class="form-group">
                                                        <label for="linkedin">Linkedin</label>
                                                        <input type="text" v-model="form.linkedin" class="form-control" name="linkedin"
                                                            id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" v-model="form.facebook" class="form-control" name="facebook"
                                                            id="facebook" placeholder="Type Facebook Link...." :class=" errors.facebook ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.facebook"> {{errors.facebook }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" v-model="form.instagram" class="form-control" name="instagram"
                                                            id="instagram" placeholder="Type Facebook Link...." :class=" errors.instagram ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.instagram"> {{errors.instagram }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input type="text" v-model="form.twitter" class="form-control" name="twitter"
                                                            id="twitter" placeholder="Type Twitter Link...." :class=" errors.twitter ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.twitter"> {{errors.twitter }}
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="youtube">Youtube</label>
                                                        <input type="text" v-model="form.youtube" class="form-control" name="youtube"
                                                            id="youtube" placeholder="Type Youtube Channel Link...." :class=" errors.youtube ? 'border-danger' : ''  " >
                                                        <small class="text-danger" v-if="errors.youtube"> {{errors.youtube }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3 me-2">Submit</button>
                                        </form>
                                    </div>
                                </div>
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
        setting: Object,
    },
    data() {
        return {
            form: {
                _method: 'put',     // PUT Method
                address: this.setting.address,
                location: this.setting.location,
                footer_content: this.setting.footer_content,
                email: this.setting.email,
                phone: this.setting.phone,
                phone_formatted: this.setting.phone_formatted,
                linkedin: this.setting.linkedin,
                facebook: this.setting.facebook,
                instagram: this.setting.instagram,
                twitter: this.setting.twitter,
                youtube: this.setting.youtube,
            },
        }
    },
    mounted() {
        console.log(this.setting);
    },
    methods: {
        updateSettings() {
            this.$inertia.post('/admin/settings/' + this.setting.id, this.form);
        }
    },
}

</script>
