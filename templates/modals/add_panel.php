<!-- Modal -->
<div class="modal fade" id="addPanel" tabindex="-1" role="dialog" aria-labelledby="addPanelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="addPanelLabel"><i class="icon icon-newtab"></i> Add a CryptoGlance Panel</h2>
      </div>
      <div class="modal-body">
         <div class="new-panel-choices">
            <a class="new-panel-btn" data-toggle="modal" data-target="#addRig" data-backdrop="static" data-dismiss="modal"><i class="icon icon-pixelpickaxe"></i>Rig</a>
            <a class="new-panel-btn" data-toggle="modal" data-target="#addPool" data-backdrop="static" data-dismiss="modal"><i class="icon icon-communitysmall"></i>Pool</a>
            <?php //if (!$cryptoGlance->isConfigAvailable('poolpicker')) { ?>
            <!-- <a class="new-panel-btn" data-toggle="modal" data-target="#poolPicker" data-backdrop="static" data-dismiss="modal"><i class="icon icon-trophy"></i>Pool Picker</a> -->
            <?php //} ?>
            <a href="wallet.php" class="new-panel-btn"><i class="icon icon-walletalt"></i>Wallet</a>
         </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
