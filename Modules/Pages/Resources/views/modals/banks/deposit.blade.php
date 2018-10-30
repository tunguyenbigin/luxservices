<div class="modal fade animated zoomInDown" id="modDeposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Deposit Money</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <label>Amount</label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" min="50" step="10" placeholder="Enter your amount" class="form-control" value="50">
            <div class="form-control-position">
              <i class="la la-money font-medium-5 line-height-1 text-muted icon-align"></i>
            </div>
          </div>

          <label>Payment Gateways</label>
          <div class="">
            <div class="custom-control custom-radio mr-1">
              <input type="radio" name="payment-getways" class="custom-control-input" id="domestic" checked>
              <label class="custom-control-label" for="domestic">Domestic</label>

              <div class="list-banks">
                  <ul>
                      @for($i=1; $i<=30; $i++)
                          <?php if( $i === 13 || $i === 29 || $i === 26 ) continue;?>
                          <li>
                              <a href="javascript:;">
                                <img src="{{ asset('storage/images/banks/bank_'.$i.'.png') }}" />
                              </a>
                          </li>
                      @endfor
                  </ul>
              </div>
            </div>

            <div class="clearfix">&nbsp;</div>
            
            <div class="custom-control custom-radio">
              <input type="radio" name="payment-getways" class="custom-control-input" id="international">
              <label class="custom-control-label" for="international">International</label>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>