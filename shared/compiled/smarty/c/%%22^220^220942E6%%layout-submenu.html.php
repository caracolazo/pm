<?php /* Smarty version 2.6.18, created on 2013-03-14 16:06:08
         compiled from layout-submenu.html */ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="/images/favicon.ico"   type="image/x-icon"/>
  <?php echo $this->_tpl_vars['header']; ?>

  
</head>
<body>
<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
 <tr>
 <td>
  <table width="100%" cellspacing="0" cellpadding="0" border="0" >
   
   <?php if (( count ( $this->_tpl_vars['subMenus'] ) > 0 )): ?>                   
                        <tr>
    <td >
     <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td width="100%" class="mainMenuBG"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_submenu']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        <?php if (( $this->_tpl_vars['exit_editor'] == 1 )): ?>
        <td class="mainMenuBG">
          <ul id="pm_submenu">
          <li id="EXIT_EDITOR" class="subMenu">
            <a title="<?php echo $this->_tpl_vars['exit_editor_label']; ?>
" href="/sysworkflow/en/classic/" onclick="exitEditor(); return false;">
              <img src="/images/close.png"></a>
            </a>
          </li>
          </ul>
        </td>
        <?php endif; ?>
      </tr>
     </table>
    </td>
   </tr>
   <?php endif; ?>
   <tr><td id="pm_separator" class="pm_separator"></td></tr>
   <tr>
    <td width="100%" align="center">
     <?php 
       global $G_TEMPLATE;
       if ($G_TEMPLATE != '') G::LoadTemplate($G_TEMPLATE);
      ?>
    </td>
   </tr>
  </table>
 </td>
 </tr>
 <tr height="100%">
  <td height="100%" valign="bottom">
   <div class="Footer">
    <div class="content"><?php echo $this->_tpl_vars['footer']; ?>
</div>
   </div>
  </td>
 </tr>
</table>
</body>
</html>