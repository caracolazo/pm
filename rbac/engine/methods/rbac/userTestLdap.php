<?php
/**
 * userTestLdap.php
 *  
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd., 
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 * 
 */

$G_MAIN_MENU = "rbac";
$G_SUB_MENU  = "rbac.userView";
$G_MENU_SELECTED = 0;

$uid = $HTTP_SESSION_VARS['CURRENT_USER'];

$dbc = new DBConnection(DB_HOST, DB_RBAC_USER, DB_RBAC_PASS, DB_RBAC_NAME );
$ses = new DBSession ( $dbc );

$stQry = "SELECT UID, USR_USE_LDAP FROM USERS where UID = $uid ";
         
$dset = $ses->Execute ( $stQry );
$row  = $dset->Read();
$useLdap = $row['USR_USE_LDAP'] == 'Y';

$access = $RBAC->userCanAccess ("RBAC_CREATE_USERS");

G::LoadClassRBAC ("user");
$obj = new RBAC_User;
$obj->SetTo ($dbc);
$obj->Load ($uid);

$G_PUBLISH = new Publisher;
$G_PUBLISH->SetTo ($dbc);
$G_PUBLISH->AddContent ( "xmlform", "xmlform", "rbac/userTestLdap", "", $obj->Fields, "userTestLdap");
$G_PUBLISH->AddContent ( "view", "testAuthenticationUser" );
$content = '';//G::LoadContent( "rbac/myApp" );
G::RenderPage( "publish" );

?>