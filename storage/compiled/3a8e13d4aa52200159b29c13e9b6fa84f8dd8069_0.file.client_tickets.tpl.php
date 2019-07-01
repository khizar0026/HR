<?php
/* Smarty version 3.1.33, created on 2018-11-14 09:22:18
  from '/Users/razib/Documents/valet/suite/apps/bpr/views/client_tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec2f9ad85e19_40408085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a8e13d4aa52200159b29c13e9b6fa84f8dd8069' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/bpr/views/client_tickets.tpl',
      1 => 1542205325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec2f9ad85e19_40408085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20631353055bec2f9ad70787_16938369', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4466954665bec2f9ad85197_66268009', "script");
}
/* {block "content"} */
class Block_20631353055bec2f9ad70787_16938369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20631353055bec2f9ad70787_16938369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Tickets'];?>
</h5>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/client/dashboard" class="btn btn-xs pull-right btn-primary"><i class="icon-mail"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</a>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover table-vcenter">
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>
                            <tr>
                                <td class="text-center" style="width: 140px;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
/">#<?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
</a></td>
                                <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="label label-success"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status];?>

                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['ticket']->value->status;?>

                                    <?php }?></span>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/client/ticket-view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
/"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->subject;?>
</a>
                                    <div class="text-muted">
                                        <em><?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
 </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['ticket']->value->updated_at);?>
</em> by <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/client/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
/"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->last_reply;?>
</a>

                                        <br>
                                        <?php if (isset($_smarty_tpl->tpl_vars['end_users']->value[$_smarty_tpl->tpl_vars['ticket']->value->end_user_id])) {?>
                                            End user: <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/client/end-user/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->end_user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['end_users']->value[$_smarty_tpl->tpl_vars['ticket']->value->end_user_id]->name;?>
</a>
                                        <?php }?>
                                    </div>
                                </td>


                            </tr>

                            <?php
}
} else {
?>
                            <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You do not have any Tickets'];?>
</td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_4466954665bec2f9ad85197_66268009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4466954665bec2f9ad85197_66268009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });


        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
