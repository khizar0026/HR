<?php
/* Smarty version 3.1.33, created on 2018-11-11 17:10:02
  from '/Users/razib/Documents/valet/suite/ui/theme/default/admin_end_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be8a8bae9e621_69703288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2b9218e445fb46002c4d8bed44fc9b2466b6a6' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/ui/theme/default/admin_end_user.tpl',
      1 => 1541973679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be8a8bae9e621_69703288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6583760575be8a8bae89336_45613260', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17888289615be8a8bae9cfe5_21707810', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_6583760575be8a8bae89336_45613260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6583760575be8a8bae89336_45613260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <h3>Create new end user</h3>
                    <div class="hr-line-dashed"></div>
                    <form method="post" id="mainForm">

                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" <?php if ($_smarty_tpl->tpl_vars['end_user']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['end_user']->value->name;?>
" <?php }?>>
                        </div>

                        <div class="form-group">
                            <label for="inputName">Company</label>
                            <input class="form-control" id="company" name="company"  <?php if ($_smarty_tpl->tpl_vars['end_user']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['end_user']->value->company;?>
" <?php }?>>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" <?php if ($_smarty_tpl->tpl_vars['end_user']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['end_user']->value->email;?>
" <?php }?>>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" name="phone" <?php if ($_smarty_tpl->tpl_vars['end_user']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['end_user']->value->phone;?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label for="inputSerial">System type</label>
                            <select class="form-control" name="system_type">
                                <option value="">None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Fax</label>
                            <input class="form-control" name="fax">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input class="form-control" name="city">
                        </div>

                        <div class="form-group">
                            <label>State</label>
                            <select class="form-control" name="state">
                                <option value="">None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ZIP / Postal code</label>
                            <input class="form-control" name="zip">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" id="btnSubmit" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_17888289615be8a8bae9cfe5_21707810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17888289615be8a8bae9cfe5_21707810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#btnSubmit').click(function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/end_users/user-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/end_users/';
                }).fail(function(data) {
                    spNotify(data.responseText,'error');
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
