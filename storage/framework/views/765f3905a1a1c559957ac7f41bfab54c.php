<?php $__env->startSection('container1'); ?>
<section>
<div class="row">
    <div class="col-md-4 db-sec-com">
        <h2 class="db-tit">Plan details</h2>
        <div class="db-pro-stat">
            <h6 class="tit-top-curv">Current plan</h6>
            <div class="db-plan-card">
                <img src="images/icon/plan.png" alt="">
            </div>
            <div class="db-plan-detil">
                <ul>
                    <li>Plan name: <strong>Standard</strong></li>
                    <li>Validity: <strong>6 Months</strong></li>
                    <li>Valid till <strong>24 June 2024</strong></li>
                    <li><a href="#" class="cta-3">Upgrade now</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8 db-sec-com">
        <h2 class="db-tit">All invoice</h2>
        <div class="db-invoice">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Plan type</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Invoice</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Platinum</td>
                    <td>12 Months(May 2023 - June 2024)</td>
                    <td>$500</td>
                    <td><a href="#" class="cta-dark cta-sml" download><span>Download</span></a></td>
                  </tr>
                  <tr>
                    <td>Standard</td>
                    <td>6 Months(Aug 2021 - Jan 2022)</td>
                    <td>$250</td>
                    <td><a href="#" class="cta-dark cta-sml" download><span>Download</span></a></td>
                  </tr>
                  <tr>
                    <td>Standard</td>
                    <td>6 Months(Jan 2021 - July 2021)</td>
                    <td>$250</td>
                    <td><a href="#" class="cta-dark cta-sml" download><span>Download</span></a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <div class="col-md-12 db-sec-com">
        <div class="alert alert-warning db-plan-canc">
            <p><strong>Plan cancellation:</strong> <a href="#" data-bs-toggle="modal" data-bs-target="#plancancel">Click here</a> to cancell the current plan.</p>
        </div>
    </div>
    <div class="col-md-12 db-sec-com">
        <div class="alert alert-warning db-plan-canc db-plan-canc-app">
            <p>Your plan cancellation request has been successfully received by the admin. Once the admin approves your cancellation, the cost will be sent to you.</p>
        </div>
    </div>
</div>
</section>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/sidebarlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/profile_plan.blade.php ENDPATH**/ ?>