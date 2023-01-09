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
                    <div class="row grid-margin">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5">Show Test</h4>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                title
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.title }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-hashtag"></i>
                                                code
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.code }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-clock"></i>
                                                time
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.time }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-flask"></i>
                                                components
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.components }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-vials"></i>
                                                specimen
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.specimen }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-brands fa-42-group"></i>
                                                instructions
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.instructions }} </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-money-bill-wave"></i>
                                                billing_codes
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ test.billing_codes }} </p>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <!------ Buttons ------->
                                            <Link href="/admin/test" class="btn btn-primary d-block">Back</Link>
                                        </div>
                                    </div>
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
        test: Object,
        service: Object,
    },
}

</script>
