<?php /* Smarty version 2.6.18, created on 2013-03-14 15:58:17
         compiled from layout-pm-modern.html */ ?>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=8"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
  <?php echo $this->_tpl_vars['_header']; ?>

  <?php echo '
<!--[if IE]>
  <style>  
  table.x-pm-headerbar td, table th {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 0px;
  }
  </style>
<![endif]-->
  '; ?>

</head>
<body>

<div id="panel-header" />

<div id="header-content" style="display:none">
    <table class="x-pm-headerbar">
    <tr>
      <td width="50%" valign="middle">
        <img src="<?php echo $this->_tpl_vars['logo_company']; ?>
" width="250" height="40"/>
      </td>

      <td align="right" valign="top">
        <table width="100%" height="25" border="0" cellspacing="0" cellpadding="0" class="headerRightSection">
          <tr valign="middle">
            <td align="right">
              <?php if ($this->_tpl_vars['licenseNotification'] != ''): ?>
              <span class="x-pm-license-notification"> 
                <img src="/images/alert_icon.gif" width="10px" headerRightSection="10px"/> <?php echo $this->_tpl_vars['licenseNotification']; ?>

              </span>
              <?php endif; ?>
            </td>
            <td height="12" valign="middle" align="right" valign="top">
              <a href="#" id="options-tool" class="options-tool">
                <?php echo $this->_tpl_vars['userfullname']; ?>

                <span> 
                  <img src="/images/classic/roll.static.gif" width="10px" headerRightSection="10px"/> 
                </span>
                <br />
                <span style="font-size:9px"><?php echo $this->_tpl_vars['rolename']; ?>
</span>
              </a>
            </td>
            <td width="40" align="right">
              <span id="user-avatar">  
                <img src="<?php echo $this->_tpl_vars['user_avatar']; ?>
" width="25" height="25"/>
              </span>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
</body>
</html>