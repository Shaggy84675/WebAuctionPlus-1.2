<?php if(!defined('DEFINE_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
// server shops page
$outputs=array();


$outputs['header']='
<script type="text/javascript" language="javascript" charset="utf-8">
$(document).ready(function() {
  oTable = $(\'#mainTable\').dataTable({
    "oLanguage": {
      "sEmptyTable"     : "&nbsp;<br />No shops to display<br />&nbsp;",
      "sZeroRecords"    : "&nbsp;<br />No shops to display<br />&nbsp;",
    },
    "bJQueryUI"         : true,
    "bStateSave"        : true,
    "iDisplayLength"    : 5,
    "aLengthMenu"       : [[5, 10, 30, 100, -1], [5, 10, 30, 100, "All"]],
    "sPaginationType"   : "full_numbers",
    "sPagePrevEnabled"  : true,
    "sPageNextEnabled"  : true,
      "bProcessing"       : true,
      "bServerSide"       : true,
      "sAjaxSource"       : "./?page={page}&ajax=true",
  });
} );
</script>
';


$outputs['body top']='
<table border="0" cellpadding="0" cellspacing="0" class="display" id="mainTable">
  <thead>
    <tr style="text-align: center; vertical-align: bottom;">
      <th>Item</th>
      <th>Buy Price</th>
      <th>Sell Price</th>
      <th>Buy / Sell</th>
{if permission[isAdmin]}
      <th>Cancel</th>
{endif}
    </tr>
  </thead>
  <tbody>
';


$outputs['body row']='
    <tr class="{rowclass}" style="height: 120px;">
      <td style="padding-bottom: 10px; text-align: center;">{item display}</td>
      <td style="text-align: center;"><b>{item qty}</b></td>
      <td style="text-align: center;"><a href="./?page=sell&amp;id={item row id}&amp;lastpage=page-myitems" class="button">Sell it</a></td>
    </tr>
';


$outputs['body bottom']='
</tbody>
</table>
';


return($outputs);
?>
