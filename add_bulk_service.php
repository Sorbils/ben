<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="col-xl-12">
            <div class="card mb-5 mb-xl-8 px-0 px-lg-5">
                <!--begin::Header-->
                <div class="card-header border-0 pt-8">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1"><?php echo $this->lang->line("service_fetcher"); ?></span>
                    </h3>
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="w-100 alert alert-success mb-0 mt-4"><?php echo $this->lang->line("fetch_success"); ?></div>
                    <?php endif ?>   
                </div> 
                <form action="" method="post">   
                <div class="card-body py-3 px-5">
                    <!--begin::Input group-->
                    <label class="form-label"><?php echo $this->lang->line("service_provider"); ?></label>
                    <div class="input-group mb-5">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <select id="serviceProvider" class="form-select" name="provider">
                            <option value="smsactivate">SMS-Activate.org</option>
                            <option value="5sim">5sim.net</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label class="form-label"><?php echo $this->lang->line("provider_category"); ?></label>
                    <div class="input-group mb-5">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <select id="providerCategories" class="form-select" name="provider_category">
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label class="form-label"><?php echo $this->lang->line("site_category"); ?></label>
                    <div class="input-group mb-5">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <select class="form-select" name="site_category">
                            <?php foreach($categories as $category) : ?>
                            <option value="<?php echo $category["id"]; ?>">
                                <?php echo $category["name"]; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <label class="form-label"><?php echo $this->lang->line("profit_rate"); ?></label>
                    <div class="input-group mb-5">
                        <span class="input-group-text"><i class="fas fa-percent"></i></span>
                        <input placeholder="<?php echo $this->lang->line("profit_rate"); ?>" class="form-control hide_spinner" name="rate" step="any" type="number" value="" required/>
                    </div>
                    <!--end::Input group-->
                </div>

                <div class="card-footer d-flex justify-content-end py-6 px-5">
                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line("fetch_services"); ?></button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
