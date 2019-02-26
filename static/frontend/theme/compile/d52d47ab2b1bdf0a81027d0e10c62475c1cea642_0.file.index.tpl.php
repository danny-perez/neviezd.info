<?php
/* Smarty version 3.1.34-dev-7, created on 2018-11-14 13:18:00
  from '/var/www/kabbi.site/public_html/frontend/theme/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5bebf658ddc7b1_15566524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52d47ab2b1bdf0a81027d0e10c62475c1cea642' => 
    array (
      0 => '/var/www/kabbi.site/public_html/frontend/theme/templates/index.tpl',
      1 => 1542190676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bebf658ddc7b1_15566524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<!--script src="/frontend/js/main.js"><?php echo '</script'; ?>
-->


<!--Begin::Section-->
<div class="row">
    <div class="col-xl-8">
        <div class="m-portlet m-portlet--mobile ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Trip
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->
                <table>
                    <tr>
                        <td>11111111</td>
                        <td>11111111</td>
                        <td>11111111</td>
                        <td>11111111</td>
                    </tr>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Audit Log-->
        <div class="m-portlet m-portlet--full-height ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Audit Log
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <h3>My Google Maps Demo</h3>
                <!--The div element for the map -->
                <div id="map" style="height: 400px; width: 400px;"></div>

                <!--Load the API from the specified URL
                * The async attribute allows the browser to render the page while the API loads
                * The key parameter will contain your own API key (which is not needed for this tutorial)
                * The callback parameter executes the initMap() function
                -->

                        </div>
                    </div>
                    <div class="tab-pane" id="m_widget4_tab2_content">
                    </div>
                    <div class="tab-pane" id="m_widget4_tab3_content">
                    </div>
                </div-->
            </div>
        </div>

        <!--end:: Widgets/Audit Log-->
    </div>
</div>

<!--End::Section-->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
