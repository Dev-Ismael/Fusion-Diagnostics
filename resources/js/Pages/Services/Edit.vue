<template>
    <Head title=" Admin Panel | Services" />
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Edit form</h4>
                    <p class="card-description"> Update this branch Service </p>
                    <form class="forms-sample" @submit.prevent="updateService()">

                         


                        <!------ Buttons ------->
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                        <Link href="/admin/service"  class="btn btn-light">Cancel</Link>

                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


    import { Link, Head } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link,
            Head,
        },
        props: {
            errors: Object,
            service: Object,
        },
        data() {
            return {
                form: {
                    _method: 'put',   // PUT Method
                    name: this.service.name,
                    content: this.service.content,
                    img: '',
                },
            }
        },
        methods: {
            updateTestimonial() {
                this.$inertia.post('/admin/service/' + this.service.id, this.form);
            }
        },
    }

</script>
