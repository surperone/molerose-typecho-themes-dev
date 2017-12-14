<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="modal fade bs-example-modal-sm" id="m-appreciate" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">支持一下作者吧</h4>
      </div>
      <div class="modal-body text-center tab-content" id="tab-con-appreciate">
          <div role="tabpanel" class="tab-pane fade active in" id="appreciate-wechatpay">1</div>
          <div role="tabpanel" class="tab-pane fade" id="appreciate-alipay">2</div>
      </div>
      <div class="text-center modal-footer" id="tab-btn-appreciate">
          <a href="#appreciate-wechatpay" data-toggle="tab" class="btn btn-s-md btn-success"><i class="fa fa-jpy"></i> 微信支付</a>
          <a href="#appreciate-alipay" data-toggle="tab" class="btn btn-s-md btn-info"><i class="fa fa-jpy"></i> 支付宝支付</a>
        </div>
    </div>
  </div>
</div>